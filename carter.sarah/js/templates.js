

const listItemTemplate = templater (o=>`
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
    <figure class="figure product">
        <img src="img/${o.images}" alt="">
        <figcaption class="flex-none">
            <div>${o.name}</div>
            <div>&dollar;${o.price}</div>
        </figcaption>
    </figure>
</a>
`);

