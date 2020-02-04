$(document).ready(function (){

    $('#editStudent').on('click', function () {
        $('#EditStudentModal').modal('show');

        $('#student_id').val($('.st-id').text());
        $('#studentfname').val($('.st-fname').text());
        $('#studentmname').val($('.st-mname').text());
        $('#studentlname').val($('.st-lname').text());
        $('#studenty_level').val($('.st-ylevel').text());
        $('#studentstrand').val($('.st-strand').text());
        $('#studentbyear').val($('.st-byear').text());
        $('#studentbmonth').val($('.st-bmonth').text());
        $('#studentbday').val($('.st-bday').text());
        $('#studentemail').val($('.st-email').text());
        $('#studenthn').val($('.st-hn').text());
        $('#studentstreet').val($('.st-street').text());
        $('#studentbrgy').val($('.st-brgy').text());
        $('#studentsubdbuild').val($('.st-sub').text());
        $('#studentdistrict').val($('.st-district').text());
        $('#studentpcode').val($('.st-pcode').text());
        $('#studentcity').val($('.st-city').text());
        $('#studentprovince').val($('.st-pm').text());
        $('#studentregion').val($('.st-region').text());
        $('#studentmothernum').val($('.st-mctn').text());
        $('#studentfathernum').val($('.st-fctn').text());
    });

    $('#editMother').on('click', function () {
        $('#EditMotherModal').modal('show');

        $('#motherfname').val($('.mt-fname').text());
        $('#mothermname').val($('.mt-mname').text());
        $('#motherlname').val($('.mt-lname').text());
        $('#motherbyear').val($('.mt-byear').text());
        $('#motherbmonth').val($('.mt-bmonth').text());
        $('#motherbday').val($('.mt-bday').text());
        $('#motheremail').val($('.mt-email').text());
        $('#motherhn').val($('.mt-hn').text());
        $('#motherstreet').val($('.mt-street').text());
        $('#motherbrgy').val($('.mt-brgy').text());
        $('#mothersubdbuild').val($('.mt-sub').text());
        $('#motherdistrict').val($('.mt-district').text());
        $('#motherpcode').val($('.mt-pcode').text());
        $('#mothercity').val($('.mt-city').text());
        $('#motherprovince').val($('.mt-pm').text());
        $('#motherregion').val($('.mt-region').text());
    });

    $('#editFather').on('click', function () {
        $('#EditFatherModal').modal('show');

        $('#fatherfname').val($('.ft-fname').text());
        $('#fathermname').val($('.ft-mname').text());
        $('#fatherlname').val($('.ft-lname').text());
        $('#fatherbyear').val($('.ft-byear').text());
        $('#fatherbmonth').val($('.ft-bmonth').text());
        $('#fatherbday').val($('.ft-bday').text());
        $('#fatheremail').val($('.ft-email').text());
        $('#fatherhn').val($('.ft-hn').text());
        $('#fatherstreet').val($('.ft-street').text());
        $('#fatherbrgy').val($('.ft-brgy').text());
        $('#fathersubdbuild').val($('.ft-sub').text());
        $('#fatherdistrict').val($('.ft-district').text());
        $('#fatherpcode').val($('.ft-pcode').text());
        $('#fathercity').val($('.ft-city').text());
        $('#fatherprovince').val($('.ft-pm').text());
        $('#fatherregion').val($('.ft-region').text());
    });

    $('#editStudentForm').on('submit', function (e) {
        e.preventDefault();
         // console.log( $( this ).serialize());
        var str = $('#editStudentForm').serialize();
        console.log(str);
        // d = {};
        // $(str).each(function(index,obj){
        //     d[obj.name] = obj.value;
        // });
        // console.log(userData);
        var student_id = $('#student_id').val();

        $.ajax({
            type: "PUT",
            url: "/studentupdate/"+student_id,
            // data: str,
            success: function (response) {
                console.log(response);
                $('#EditStudentModal').modal('hide');
                alert('Data Updated');
                location.reload();
            },
            error: function (error) {
                alert('Data Error');
                console.log(error);
            }
        });
    });

    $('#editMotherForm').on('submit', function (e) {
        e.preventDefault();
        // console.log( $( this ).serialize());

        var student_id = $('#mother_id').val();

        $.ajax({
            type: "PUT",
            url: "/motherupdate/"+ student_id,
            data: $('#editMotherForm').serialize(),
            success: function (response) {
                console.log(response);
                $('#EditMotherModal').modal('hide');
                alert('Data Updated');
                location.reload();
            },
            error: function (error) {
                alert('Data Error');
                console.log(error);
            }
        });
    });

    $('#editFatherForm').on('submit', function (e) {
        e.preventDefault();
        // console.log( $( this ).serialize());

        var student_id = $('#father_id').val();

        $.ajax({
            type: "PUT",
            url: "/fatherupdate/"+ student_id,
            data: $('#editFatherForm').serialize(),
            success: function (response) {
                console.log(response);
                $('#EditFatherModal').modal('hide');
                alert('Data Updated');
                location.reload();
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});
