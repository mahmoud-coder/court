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
                    <div class="col mb-3">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="document1" name="document" value="absent" class="custom-control-input">
                            <label class="custom-control-label" for="document1">غيابي</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="document2" name="document" value="self" class="custom-control-input">
                            <label class="custom-control-label" for="document2">بشخصه</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="document3" name="document" value="agent" class="custom-control-input">
                            <label class="custom-control-label" for="document3">بوكيل</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="document4" name="document" value="attend_absent" class="custom-control-input">
                            <label class="custom-control-label" for="document4">غيابي + حضور</label>
                        </div>
                        <hr class="my-2">
                        <u class="d-block text-center text-primary">عدم إنعقاد الخصومة</u>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="document5" name="document" value="a" class="custom-control-input">
                            <label class="custom-control-label" for="document5">تحري عدم مثول</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="document6" name="document" value="b" class="custom-control-input">
                            <label class="custom-control-label" for="document6">تحري غير منفذ</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="document7" name="document" value="c"  class="custom-control-input">
                            <label class="custom-control-label" for="document7">عدم اعادة اعلان</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="document8" name="document" value="d" class="custom-control-input">
                            <label class="custom-control-label" for="document8">عدم مثول لاعادة الاعلان</label>
                        </div>
                    </div>
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
    <script src="js/jq.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.rtl.js"></script>
    <script>
        $(function () {
            $("#main_form").submit(function (e) {
                e.preventDefault();
                $.post("./app.php", $("#main_form").serialize());
                $("[name='index']").val(function (i, oldValue) { return parseInt(oldValue) + 1; });
                $("[name='document_date']").val('');
                $("#case_number").val('').focus();
            });
        });
    </script>
</body>

</html>