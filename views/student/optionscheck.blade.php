<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    $("input[name='chkhsc']").click(function () {
        if ($("#chkYes").is(":checked")) {
            $("#details").show();
        } else {
            $("#details").hide();
        }
    });
});
</script>
<script type="text/javascript">
$(function () {
    $("input[name='chkdiploma']").click(function () {
        if ($("#chkY").is(":checked")) {
            $("#diplomadetails").show();
        } else {
            $("#diplomadetails").hide();
        }
    });
});
</script>
<script type="text/javascript">
$(function () {
    $("input[name='chkadmission']").click(function () {
        if ($("#chkdiploma1").is(":checked")) {
            $("#admissiondetails1").show();
            $("#admissiondetails2").hide();
        } else {
            $("#admissiondetails1").hide();
            $("#admissiondetails2").show();
        }
    });
});
</script>
