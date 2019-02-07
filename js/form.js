(function ($) {
    var $index = $("[name='index']"),
        $case_number = $("#case_number"),
        $document_date = $("[name='document_date']");

    $(function () {
        $(document).on("keypress", "form", function (e) {
            if (e.keyCode == 13 /* ENTER key */) {
                if ($case_number.is(":focus")) {
                    $document_date.focus();
                    return false;
                }
            }
        });
        $("#main_form").submit(function (e) {
            e.preventDefault();
            $.post("./app.php", $("#main_form").serialize());
            $index.val(function (i, oldValue) { return parseInt(oldValue) + 1; });
            $document_date.val('');
            $case_number.val('').focus();
        });
    });
}(jQuery));