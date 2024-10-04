<script>
    const generateCards = (data = [], wrapperElement, totalCard = 10) => {
        let cards = '';
        const skeletonCardText = `<p class="card-text">
            <span class="placeholder col-3"></span>
            <span class="placeholder col-4"></span>
            <span class="placeholder col-4"></span>
        </p>
        <p class="card-text">
            <span class="placeholder col-12"></span>
            <span class="placeholder col-12"></span>
            <span class="placeholder col-6"></span>
        </p>`;
        const apiUrl = @json(config('app.my_config.api_url')) + '/';

        if (totalCard > 0) {
            let i = 0;
            while (i < totalCard) {
                cards += `<div class="card overflow-hidden col-12 col-md-5 col-lg-4 col-xl-3 m-0 p-0 ${data.length > 0 ? '' : 'placeholder-glow'}">
                    <div class="wrapper-thumbnail ${data.length > 0 ? '' : 'placeholder'}">
                        <img src="${data.length > 0 ? apiUrl + data[i].img_thumbnail : ''}" class="card-img-top" alt="Thumbnail ${data.length > 0 ? data[i].title : ''}" loading="lazy">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title fs-5 text-align-justify col-12 ${data.length > 0 ? '' : 'placeholder'}">
                            <a href="${data.length > 0 ? '/' + data[i].slug : '#'}" class="text-decoration-none text-dark fw-bold">
                                ${data.length > 0 ? data[i].title : ''}
                            </a>
                        </h2>
                        ${data.length > 0 ? thumbnailItems(data[i]) : ''}
                        ${data.length > 0 ? '<p class="card-text small text-align-justify">' + data[i].excerpt + '</p>' : skeletonCardText}
                    </div>
                </div>`;

                i++;
            }
        } else {
            cards = '<span class="text-center">Artikel tidak ditemukan.</span>';
        }

        return $(wrapperElement).html(cards);
    };

    const thumbnailItems = (article) => {
        return `<div class="d-flex gap-2 border-bottom mb-2" id="thumbnailItems">
            <div class="d-flex align-items-center gap-1" title="Kategori">
                <i data-feather="bookmark" class="thumbnail-icon"></i>
                <span>${article.category.name}</span>
            </div>
            <div class="d-flex align-items-center gap-1" title="Tanggal Dibuat">
                <i data-feather="calendar" class="thumbnail-icon"></i>
                <span>${formatDate(article.created_at)}</span>
            </div>
            <div class="d-flex align-items-center gap-1" title="Penulis">
                <i data-feather="user" class="thumbnail-icon"></i>
                <span>${article.user.username}</span>
            </div>
        </div>`;
    };

    const generatePagination = (wrapperElement, page, meta) => {
        const paginationElement = `<ul class="pagination">
            <li class="page-item ${meta.prev_page_url ? '' : 'disabled'}">
                <div class="page-link pagination-items" onclick="getPage(this)" data-page="${meta.prev_page_url ? meta.current_page - 1 : meta.current_page}" data-active="${meta.prev_page_url ? 'on' : 'off'}">
                    <span>&laquo;</span>
                </div>
            </li>
            <li class="page-item">
                <div class="page-link active" id="currPage">${meta.current_page}</div>
            </li>
            <li class="page-item ${meta.next_page_url ? '' : 'disabled'}">
                <div class="page-link pagination-items" onclick="getPage(this)" data-page="${meta.next_page_url ? meta.current_page + 1 : meta.current_page}" data-active="${meta.next_page_url ? 'on' : 'off'}">
                    <span>&raquo;</span>
                </div>
            </li>
        </ul>`;

        return $(wrapperElement).html(paginationElement);
    };

    const formatDate = (dateString) => {
        const date = new Date(dateString);
        const day = ("0" + date.getDate()).slice(-2);
        const month = ("0" + (date.getMonth() + 1)).slice(-2);
        const year = date.getFullYear();

        return day + '/' + month + '/' + year;
    };
</script>
