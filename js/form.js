// by: Mahmoud Sami
function template(text){
    var source = "var retval='';";
    source+="with(obj){";
    index=0;
    text.replace(/\{\{([^\}]+)\}\}|<#([\s\S]+?)#>|$/g,function(match,interpolate,evaluate,offset){
        var html=text.slice(index,offset).replace(/\\|'|\r|\n/g,function(match){return '\\'+match;});
        index= offset+match.length;
        source+="retval+='"+html+"';";
        if(interpolate){
            source+="retval+="+interpolate+";";
        }
        if(evaluate){
            source+= evaluate;
        }
    });
    source+="}"; // close "with(obj){"
    source+="return retval;" ;
    var render = new Function('obj',source);
    return render;
}

// populate the div#kind-of-document from the template script
var temp = document.getElementById("kind-of-document-template").innerHTML;
var court_template = template(temp);
// "templates" variable should be defined in the "templates/templates-dsic.js" file
document.getElementById("kind-of-document").innerHTML = court_template(templates); 

//--------------- the main form events and script-----------

(function ($) {
    var $index = $("[name='index']"),
        $case_number = $("#case_number"),
        $document_date = $("[name='document_date']"),
        alter_document_date = function(){
            // let document_date_val = $document_date.val();
            // if(/^([0-9]{1,2}\/){2}[0-9]{4}$/.test(document_date_val)){
            //     $document_date.val(`عقد البيع المؤرخ ${document_date_val}`);
            // }
        };

    $(function () {
        $(document).on("keypress", "form", function (e) {
            if (e.keyCode == 13 /* ENTER key */) {
                if ($case_number.is(":focus")) {
                    let case_number_val = $case_number.val();
                    if(/^[0-9]+$/.test(case_number_val))
                        /* the two year mode */
                        // $case_number.val(`${case_number_val} لسنة ${(case_number_val < 1000)?2020:20019}`);
                        $case_number.val(`${case_number_val} لسنة 2020`);
                        /** the one year mode */
                        //$case_number.val(`${case_number_val} لسنة 2019`);
                    $document_date.focus();
                    return false;
                }
            }
        });
        $document_date.on("blur",function(){
            alter_document_date();
        });
        $("#main_form").submit(function (e) {
            e.preventDefault();
            alter_document_date();
            $.post("./app.php", $("#main_form").serialize());
            $index.val(function (i, oldValue) { return parseInt(oldValue) + 1; });
            $document_date.val('');
            $case_number.val('').focus();
        });
    });
}(jQuery));