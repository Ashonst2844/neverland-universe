// If Character Photo Is Hover, Short Biodata Will Be Shown
for (let i = 0; i <= 6; i++) {
    (function (i) { // Gunakan fungsi IIFE untuk menyimpan nilai index saat ini
        $("img.image" + i).hover(function () {
            $("p.caption" + i).fadeToggle("fast")
        });
    })(i);
}