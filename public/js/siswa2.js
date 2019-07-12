$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat_kategori = "api/kategori";
    var alamat_tag = "api/tag";
    var alamat_artikel = "api/artikel";

    // kategori
    // Get Data Siswa
    $.ajax({
        url: alamat_kategori,
        method: "GET",
        dataType: "json",
        success: function(berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function(key, value) {
                $(".data-kategori").append(
                    `
                    <tr>
                                <td>${value.nama_kategori}</td>
                                <td>${value.slug}</td>
                                <td><button class="btn btn-danger btn-sm hapus-data" data-id="${
                                    value.id
                                }">Hapus</button></td>
                            </tr>
                    `
                );
            });
        }
    });

    // Simpan Data

    $(".tombol-simpan").click(function(simpan) {
        simpan.preventDefault();
        var variable_isian_nama = $("input[name=nama_kategori]").val();
        // console.log(nama)
        $.ajax({
            url: alamat_kategori,
            method: "POST",
            dataType: "json",
            data: {
                nama_kategori: variable_isian_nama
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });

    // Hapus Data
    $(".table-kategori").on("click", ".hapus-data", function() {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat_kategori + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });

    // tag
    $(document).ready(function() {
        $(".tag").tag({
            placeholder: "Nama_tag",
            minimumInputLength: 3,
            ajax: {
                url: "<?=url('/browse/');?>",
                dataType: "json",
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term
                        //tambahkan parameter lainnya di sini jika ada
                    };
                },
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.nama + " - " + item.bagian,
                                id: item.NIK
                            };
                        })
                    };
                },
                cache: true
            },
            templateSelection: function(selection) {
                var result = selection.text.split("-");
                return result[0];
            }
        });
    });

    // Simpan Data
    $(".tombol-simpan-tag").click(function(simpan) {
        simpan.preventDefault();
        var variable_isian_nama = $("input[name=nama_tag]").val();
        // console.log(nama)
        $.ajax({
            url: alamat_tag,
            method: "POST",
            dataType: "json",
            data: {
                nama_tag: variable_isian_nama
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });

    // Hapus Data
    $(".table-tag").on("click", ".hapus-data-tag", function() {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat_tag + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });

    // artikel

    $.ajax({
        url: alamat_artikel,
        method: "GET",
        dataType: "json",

        success: function(berhasil) {
            // console.log(berhasil)

            idnya = document.getElementById("id_kategori");

            $.each(berhasil.data, function(key, value) {
                $(".table-artikel").append(
                    `
                <tr>
                            <td>${value.judul}</td>
                            <td>${value.slug}</td>
                            <td>${value.kategori.nama_kategori}</td>
                            <td>${value.id_user}</td>
                            <td><img src="../assets/img/artikel/${value.foto}"
                            style="width:250px; height:250px;" alt="Foto"></td>
                            <td><button class="btn btn-danger btn-sm hapus-data-tag" data-id="${
                                value.id
                            }">Hapus</button></td>
                        </tr>
                `
                );
            });
        }
    });

    $.ajax({
        url: alamat_kategori,
        method: "GET",
        dataType: "json",

        success: function(berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function(key, value) {
                $(".td-kategori").append(
                    `
                ${value.id_kategori}${value.nama_kategori}
                `
                );
            });
        }
    });

    // Simpan Data
    $(".tombol-simpan-tag").click(function(simpan) {
        simpan.preventDefault();
        var variable_isian_nama = $("input[name=nama_tag]").val();
        // console.log(nama)
        $.ajax({
            url: alamat_tag,
            method: "POST",
            dataType: "json",
            data: {
                nama_tag: variable_isian_nama
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });

    // Hapus Data
    $(".table-tag").on("click", ".hapus-data-tag", function() {
        var id = $(this).data("id");
        // alert(id)
        $.ajax({
            url: alamat_tag + "/" + id,
            method: "DELETE",
            dataType: "json",
            data: {
                id: id
            },
            success: function(berhasil) {
                alert(berhasil.message);
                location.reload();
            },
            error: function(gagal) {
                console.log(gagal);
            }
        });
    });
});

var modal = document.getElementById("id01");
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
