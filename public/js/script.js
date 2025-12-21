$(function () {
  // Tambah Data
  $(document).on("click", ".tombolTambahData", function () {
    $("#judulModal").html("Tambah Data Siswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("form").attr("action", "http://localhost/phpMVC/public/siswa/tambah");

    $("#id").val("");
    $("#nama").val("");
    $("#nik").val("");
    $("#email").val("");
    $("#jurusan").val("TI");
  });

  // Ubah Data
  $(document).on("click", ".tampilModalUbah", function () {
    $("#judulModal").html("Ubah Data Siswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $("form").attr("action", "http://localhost/phpMVC/public/siswa/ubah");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpMVC/public/siswa/ubah",
      data: {
        id: id,
        ajax: "true",
      },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#id").val(data.id);
        $("#nama").val(data.nama);
        $("#nik").val(data.nik);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
      },
      error: function (xhr, status, error) {
        console.log("Error:", error);
        console.log("Response:", xhr.responseText);
      },
    });
  });
});
