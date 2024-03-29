<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> صحة التوقيع </title>
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center text-info display-4">Mahmoud Sami</h1>
        <hr class="my-4">
        <form class="row" id="main_form">
            <div class="col" id="case-detail">
                <input type="text" class="form-control mb-3" placeholder="تاريخ الجلسة" name="session_date">
                <div class="input-group mb-3">
                    <div class="input-group-prepend ">
                        <span class="input-group-text" id="index-label">مسلسل</span>
                    </div>
                    <input type="text" name="index" class="form-control" value="1" aria-describedby="index-label">
                </div>
                <div class="form-row form-group">
                    <div class="col">
                        <input type="text" id="case_number" name="case_number" class="form-control" placeholder="رقم الدعوى">
                    </div>
                    <div class="col">
                        <input type="text" name="document_date" class="form-control" placeholder="تاريخ العقد">
                    </div>
                </div>
                <!-- the row of radio bottons -->
                <div class="form-row">
                    <!-- the kind of document -->
                    <div class="col mb-3" id="kind-of-document"></div>
                    <!-- the kind of plaintiff -->
                    <div class="col mb-3">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="plaintiff" value="male" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">مدعي</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="plaintiff" value="female" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">مدعية</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="plaintiff" value="two_male" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio3">مدعيان</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio4" name="plaintiff" value="two_female" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">مدعيتان</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio5" name="plaintiff" value="many_male" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio5">مدعين</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio6" name="plaintiff" value="many_female" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio6">مدعيات</label>
                        </div>
                    </div>
                    <!-- the kind of defendant -->
                    <div class="col mb-3">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio7" name="defendant" value="male" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio7">مدعي عليه</label>

                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio8" name="defendant" value="female" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio8">مدعي عليها</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio9" name="defendant" value="two_male" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio9">مدعي عليهما</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio10" name="defendant" value="two_female" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio10">مدعي عليهنا</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio11" name="defendant" value="many_male" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio11">مدعي عليهم</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio12" name="defendant" value="many_female" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio12">مدعي عليهن</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="أكتب الحكم" id="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    <script type="text/template" id="kind-of-document-template">
        <# var i = 0; #>
        <# templates.forEach(function(template){ #>
            <# ++i; #>
            <# if(template.type == "template"){ #>
                <div class="custom-control custom-radio">
                    <input type="radio" id="document-{{i}}" name="document" value="{{template.fileName}}"
                    class="custom-control-input">
                    <label class="custom-control-label" for="document-{{i}}">{{template.label}}</label>
                </div>
            <# } else if(template.type=="line"){ #>
                <hr class="my-2">
            <# } else { /* the template.type is label */ #>
                <u class="d-block text-center text-primary">{{template.label}}</u>
            <# } #>
        <# }); #>
    </script>
    <script src="js/jq.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.rtl.js"></script>
    <script src="templates/templates-disc.js"></script>
    <script src="js/form.js"></script>
</body>
</html>