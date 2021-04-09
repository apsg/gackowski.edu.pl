export default class BlogService {
    async grab(slug) {
        return  axios.get('/a/blog/' + slug)
            .then(r => {
                return this.format(r.data.data);
            });
    }

    format(data) {
        return `
<div class="content">
    <div class="image h-100 w-100">
        <img class="w-100" src="${data.featured}" alt="">
    </div>
    <div class="desc container">
        <div class="post-box pb-5">
            <h1>${data.title}</h1>
            <div class="blog-detail">
                <span class="date">${data.date}</span>
            </div>
            <div class="blog-content px-3">
                ${data.content}
            </div>
        </div>
    </div>
</div>`;
    }
}
