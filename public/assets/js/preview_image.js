function previewImg(input, preview) {
  document.getElementById(input).onchange = evt => {
    const [file] = document.getElementById(input).files
    if (file) {
      document.getElementById(preview).src = URL.createObjectURL(file)
    }
  }
}