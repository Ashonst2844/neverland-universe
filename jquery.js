// If Character Photo Is Hover, Short Biodata Will Be Shown
for (let i = 0; i <= 8; i++) {
    $("img.image" + i).hover(function () {
        $("p.caption" + i).fadeToggle("fast")
    });
}