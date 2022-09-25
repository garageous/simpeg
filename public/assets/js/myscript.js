const flashData = $(".flash-data").data("flashdata");

// console.log(flashData);
if (flashData) {
  Swal.fire({
    title: "Data berhasil" + flashData,
    text: "",
    icon: "success",
  });
}
