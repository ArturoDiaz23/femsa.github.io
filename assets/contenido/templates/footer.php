<script defer src="../../js/app.js" type='module'></script>
<script defer src="../../js/bootstrap.bundle.js"></script>

  <script defer>
        document.querySelectorAll(".input_form").forEach((element) => {
          element.addEventListener("blur", (event) => {
              if (event.target.value != "") {
                  event.target.nextElementSibling.classList.add("filled");
              } else {
                  event.target.nextElementSibling.classList.remove("filled");
              }
          });
        });

    </script>
</script>