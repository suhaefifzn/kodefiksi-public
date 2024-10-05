<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

use App\Services\ArticleService;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap for this website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $sitemap = Sitemap::create();

            // statis URLs
            $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
            $sitemap->add(Url::create('/about')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
            $sitemap->add(Url::create('/contact')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
            $sitemap->add(Url::create('/disclaimer')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
            $sitemap->add(Url::create('/privacy-policy')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
            $sitemap->add(Url::create('/category/anime')->setPriority(1)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
            $sitemap->add(Url::create('/category/game')->setPriority(1)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
            $sitemap->add(Url::create('/category/pemrograman')->setPriority(1)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));

            // articles from API
            $articleService = new ArticleService();
            $page = 1; // initialize page
            $authorsArr = [];

            while ($page != '') {
                $response = $articleService->getArticles($page);
                $decodedResponse = $response->getData('data');

                if (isset($decodedResponse['data']['articles'])) {
                    $articles = $decodedResponse['data']['articles'];
                    $meta = $decodedResponse['data']['meta'];
                    $nextPageUrlExloded = explode('=', $meta['next_page_url']);
                    $page = $nextPageUrlExloded[count($nextPageUrlExloded) - 1];

                    foreach ($articles as $article) {
                        array_push($authorsArr, $article['user']['username']);
                        $date = Carbon::parse($article['updated_at']);

                        $sitemap->add(Url::create("/{$article['slug']}")
                            ->setLastModificationDate($date) // Format harus dalam Y-m-d H:i:s
                            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                            ->setPriority(0.9));
                    }
                }
            }

            // generate untuk author
            array_unique($authorsArr);

            foreach ($authorsArr as $author) {
                $sitemap->add(Url::create("/author/$author")->setPriority(1)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
            }

            // Simpan sitemap ke file
            $publicHtmlPath = realpath(__DIR__ . '/../../../public_html/sitemap.xml');
            $sitemap->writeToFile($publicHtmlPath);

            $this->info('Sitemap generated successfully.');
        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
            $this->error('File: ' . $e->getFile() . ' on line ' . $e->getLine());
        }
    }
}
