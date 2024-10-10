@extends('layout.main', [
    'meta' => [
        'author' => 'kodefiksi',
        'title' => 'Privacy Policy',
        'url' => config('app.url') . '/privacy-policy',
        'description' => 'At kodefiksi.com we consider the privacy of our visitors to be extremely important. This privacy policy document describes in detail the types of personal information is collected and recorded by kodefiksi.com and how we use it.',
    ]
])
@section('meta.article')
<meta property="article:published_time" content="2024-10-10T02:05:41.003Z">
<meta property="article:modified_time" content="2024-10-10T02:05:41.003Z">
@endsection
@section('content')
    {{-- Wrapper untuk breadcrumb --}}
    <div class="border-bottom mb-4 overflow-hidden" id="breadcrumbWrapper">
        <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{!! route('home') !!}" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Privacy Policy
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="article-wrapper d-flex flex-column col-xl-8">
            <article class="d-flex flex-column col-12 col-xl-12">
                <div class="d-flex justify-content-center align-items-center flex-column" id="articleHeader">
                    <div class="text-center mt-1" id="articleTitle">
                        <h1>Privacy Policy</h1>
                    </div>
                </div>

                <div class="mt-4" id="articleBody">
                    <h2 class="fw-bold fs-4">Privacy Policy for Kode Fiksi</h2>
                    <p>
                        If you require any more information or have any questions about our privacy policy.
                    </p>
                    <p>
                        At kodefiksi.com we consider the privacy of our visitors to be extremely important. This privacy policy document describes in detail the types of personal information is collected and recorded by kodefiksi.com and how we use it.
                    </p>
                    <strong class="fs-5">
                        Log Files
                    </strong>
                    <p>
                        Like many other Web sites, kodefiksi.com makes use of log files. These files merely logs visitors to the site - usually a standard procedure for hosting companies and a part of hosting services's analytics. The information inside the log files includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date/time stamp, referring/exit pages, and possibly the number of clicks. This information is used to analyze trends, administer the site, track user's movement around the site, and gather demographic information. IP addresses, and other such information are not linked to any information that is personally identifiable.
                    </p>
                    <strong class="fs-5">
                        Cookies and Web Beacons
                    </strong>
                    <p>
                        kodefiksi.com uses cookies to store information about visitors' preferences, to record user-specific information on which pages the site visitor accesses or visits, and to personalize or customize our web page content based upon visitors' browser type or other information that the visitor sends via their browser.
                    </p>
                    <strong class="fs-5">
                        DoubleClick DART Cookie
                    </strong>
                    <ul>
                        <li>
                            <p>
                                Google, as a third party vendor, uses cookies to serve ads kodefiksi.com.
                            </p>
                        </li>
                        <li>
                            <p>
                                Google's use of the DART cookie enables it to serve ads to our site's visitors based upon their visit to kodefiksi.com and other sites on the Internet.
                            </p>
                        </li>
                        <li>
                            <p>
                                Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at the following URL - <a href="https://www.google.com/privacy_ads.html" title="Opt out of the Dart Cookie">https://www.google.com/privacy_ads.html</a>.
                            </p>
                        </li>
                    </ul>
                    <strong class="fs-5">
                        Our Advertising Partners
                    </strong>
                    <p>
                        Some of our advertising partners may use cookies and web beacons on our site. Our advertising partners include .......
                    </p>
                    <ul>
                        <li>Google</li>
                        <li>Other</li>
                    </ul>
                    <p>
                        <em>While each of these advertising partners has their own Privacy Policy for their site, an updated and hyperlinked resource is maintained here: <a href="http://www.privacypolicyonline.com/privacy-policies">Privacy Policies</a>.</em>
                    </p>
                    <p>
                        <em>You may consult this listing to find the privacy policy for each of the advertising partners of kodefiksi.com.</em>
                        <br>
                        These third-party ad servers or ad networks use technology in their respective advertisements and links that appear on kodefiksi.com and which are sent directly to your browser. They automatically receive your IP address when this occurs. Other technologies (such as cookies, JavaScript, or Web Beacons) may also be used by our site's third-party ad networks to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on the site.
                    </p>
                    <p>
                        kodefiksi.com has no access to or control over these cookies that are used by third-party advertisers.
                    </p>
                    <strong class="fs-5">
                        Third Party Privacy Policies
                    </strong>
                    <p>
                        You should consult the respective privacy policies of these third-party ad servers for more detailed information on their practices as well as for instructions about how to opt-out of certain practices.
                    </p>
                    <p>
                        kodefiksi.com's privacy policy does not apply to, and we cannot control the activities of, such other advertisers or web sites. You may find a comprehensive listing of these privacy policies and their links here: <a href="https://www.privacypolicyonline.com/privacy-policy-links" title="Privacy Policy Links">Privacy Policy Links</a>.
                    </p>
                    <p>
                        If you wish to disable cookies, you may do so through your individual browser options. More detailed information about cookie management with specific web browsers can be found at the browsers' respective websites. <a href="http://www.privacypolicyonline.com/what-are-cookies">What Are Cookies?</a>
                    </p>
                    <strong class="fs-5">
                        Children's Information
                    </strong>
                    <p>
                        We believe it is important to provide added protection for children online. We encourage parents and guardians to spend time online with their children to observe, participate in and/or monitor and guide their online activity.
                        kodefiksi.com does not knowingly collect any personally identifiable information from children under the age of 13. If a parent or guardian believes that kodefiksi.com has in its database the personally-identifiable information of a child under the age of 13, please contact us immediately (using the contact in the first paragraph) and we will use our best efforts to promptly remove such information from our records.
                    </p>
                    <strong class="fs-5">
                        Online Privacy Policy Only
                    </strong>
                    <p>
                        This privacy policy applies only to our online activities and is valid for visitors to our website and regarding information shared and/or collected there.
                    </p>
                    <p>
                        This policy does not apply to any information collected offline or via channels other than this website.
                    </p>
                    <strong class="fs-5">
                        Consent
                    </strong>
                    <p>
                        By using our website, you hereby consent to our privacy policy and agree to its terms.
                    </p>
                    <strong class="fs-5">
                        Update
                    </strong>
                    <p>
                        This Privacy Policy was last updated on: October 10, 2024.
                    </p>
                    <em>
                        Should we update, amend or make any changes to our privacy policy, those changes will be posted here.
                    </em>
                </div>
            </article>
        </div>
    </div>
@endsection
