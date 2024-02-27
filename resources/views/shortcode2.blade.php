<?php
use App\Models\Blog;



$blogs = Eventy::filter('web_blogs', 1);
?>

<script>
    Vvveb.Sections.add("shortcode/blogs", {
        name: "Blogs 1",
        image: "https://cdn-icons-png.flaticon.com/512/3959/3959420.png",
        html: <?= json_encode($blogs) ?>
    });

    Vvveb.SectionsGroup["shortcode"] = ["shortcode/blogs"];
</script>
