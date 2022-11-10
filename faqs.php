<?php include_once 'header.php'; ?>
<!--Header-->
<?php include 'pghead.php'; ?>
    <div class="d-flex w-100 flex-column align-items-center" style="background-color: var(--main-color);">
      <label class="p-5">Search: <input id="search-box" type="text"></label>
      <div class="d-flex w-100 justify-content-center">
        <div id="questions" class="d-flex flex-wrap w-100 justify-content-center"></div>
      </div>
    </div>
  </body>

  <footer>
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/loadFAQ.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <?php include 'footer.php'; ?>
  </footer>
</html>
