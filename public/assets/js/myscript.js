const flashData = $(".flash-data").data("flashdata");

// console.log(flashData);
if (flashData) {
  Swal({
    title: "Data berhasil" + flashData,
    text: "",
    type: "success",
  });
}
