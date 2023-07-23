<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    function submitData(action){

        $(document).ready(function () {
            $("input[name=course]").each(function () {
                if ($(this).is(":checked")) {
                    course.push($(this).val());
                }
            });

            // Convert the course array to a comma-separated string.
            var courseString = course.join(",");
            var data = {
                action: action,
                id: $("#id").val(),
                first_name: $("#first_name").val(),
                last_name: $("#last_name").val(),
                email: $("#email").val(),
                password: $("#password").val(),
                day: $("#day").val(),
                month: $("#month").val(),
                year: $("#year").val(),
                gender: $("#gender").val(),
                course: course,
                img: $("#img").val(),
            };
            $.ajax({
                url: 'function.php',
                type: 'post',
                data: data,
                success:function(responce){
                    alert(responce);
                }
            });
        });
    }
</script>