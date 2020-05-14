function fillDelete(Value) {
    //Assigning value to "search" div in "search.php" file.
    $('#tabel').val(Value);
    //Hiding "display" div in "search.php" file.
    $('#tabel1').hide();
}

$(document).ready(function() {
    //On pressing a key on "Search box" in "search.php" file. This function will be called.
    $("Delete").on('click', function() {
        alert("asdasd");
        //Assigning search box value to javascript variable named as "name".
    });
});