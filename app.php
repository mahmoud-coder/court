<?php
debug($_POST);
if(! isset($_POST['index'])) die("No Access Right!!");
debug(null,"we are in");
function debug($obj,$msg=false){
    ob_start(function($buff){
        $f = fopen('D:\xampp\htdocs\PHPWord\debug.txt','a+');
        fwrite($f,str_replace("=>\n","=>", $buff));
        fclose($f);
    });
    echo "------------------------------\n";
    if($msg) echo $msg,"\n*********\n";
    var_dump($obj);
    ob_end_clean();
}

include_once './vendor/autoload.php';

use \PhpOffice\PhpWord\TemplateProcessor;

$plaintiff = $_POST['plaintiff'];
$defendant = $_POST['defendant'];

$template = new TemplateProcessor('./templates/absent.docx');
$template->setValue("رقم الدعوى",$_POST['case_number']);
$template->setValue("تاريخ العقد",$_POST['document_date']);
$template->setValue("تاريخ الجلسة",$_POST['session_date']);

plaintiff("المدعي","المدعية","المدعيان","المدعيتان","المدعين","المدعيات");
plaintiff("مثل","مثلت","مثلا","مثلنا","مثلوا","مثلن");
plaintiff("قدم","قدمت","قدما","قدمنا","قدموا","قدمن");
plaintiff("طلب","طلبت","طلبا","طلبتا","طلبوا","طلبن");
plaintiff("له","لها","لهما","لهنا","لهم","لهن");
plaintiff("بطلباته","بطلباتها","بطلبتهما","بطلبتهنا","بطلبتهم","بطلبتهن");
plaintiff("دعاه","دعاها","دعاهما","دعاهنا","دعاهم","دعاهن");
plaintiff("يرغب","ترغب","يرغبا","يرغبنا","يرغبوا","يرغبن");
plaintiff("دعواه","دعواها","دعواهما","دعواهما","دعواهم","دعواهن");
plaintiff("أقام","أقامت","أقاما","أقامتا","أقاموا","أقمن");
plaintiff("كان","كانت","كانا","كانا","كانوا","كانوا");
plaintiff("بإجابته لطلبه","بإجابتها لطلبها","بإجابتهما لطلبهما","بإجابتهنا بطلبهنا","بإطابتهم لطلبهم","بإجابتهن لطلبهن");

defendant("عليه","عليها","عليهما","عليهنا","عليهم","عليهن");
defendant("إلزامه","إلزامها","إلزامهما","إلزامهنا","إلزامهم","إلزامهن");
defendant("يمثل","تمثل","يمثل","يمثل","يمثل","يمثل");
defendant("إعلانه","إعلانها","إعلانهما","إعلانهنا","إعلانهم","إعلانهن");
defendant("الذي لم يحضر","التي لم تحضر","اللذان لم يحضرا","اللتان لم تحضرا","اللذين لم يحضروا","الائي لم يحضرن");
defendant("يدفع","تدفع","يدفعا","يدفعنا","يدفعوا","يدفعن");
defendant("الزمته","الزمتها","الزمتهما","الزمتهنا","الزمتهم","الزمتهن");
defendant("أقر","أقرت","أقرا","أقروا","أقروا","أقروا");
defendant("الذي مثل","التي مثلت","اللذان مثلا","اللاتان مثلتا","الذين مثلوا","اللائي مثلن");
defendant("بشخصه","بشخصها","بشخصهما","بشخصهنا","بشخصهم","بشخصهن");
defendant("الذي حضر","التي حضرت","اللذان حضرا","اللتان حضرتا","الذين حضروا","اللائي حضرن");
defendant("+مثل","مثلت","مثلا","مثلتا","مثلوا","مثلن");

$case_document_name = sprintf('%03d',$_POST['index'])." - {$_POST['case_number']}.docx";
$template->saveAs("./output/{$case_document_name}");

function plaintiff($male,$female,$two_male,$two_female,$many_male,$many_female){
    global $plaintiff;
    global $template;
    $value='';
    switch ($plaintiff){
        case "male":
        $value=$male;
        break;
        case "female":
        $value=$female;
        break;
        case "two_male":
        $value=$two_male;
        break;
        case "two_female":
        $value=$two_female;
        break;
        case "many_male":
        $value=$many_male;
        break;
        case "many_female":
        $value=$many_female;
        break;
    }
    $template->setValue($male,$value);
};

function defendant($male,$female,$two_male,$two_female,$many_male,$many_female){
    global $defendant;
    global $template;
    $value='';
    switch ($defendant){
        case "male":
        $value= str_replace('+','',$male);
        break;
        case "female":
        $value=$female;
        break;
        case "two_male":
        $value=$two_male;
        break;
        case "two_female":
        $value=$two_female;
        break;
        case "many_male":
        $value=$many_male;
        break;
        case "many_female":
        $value=$many_female;
        break;
    }
    $template->setValue($male,$value);
}