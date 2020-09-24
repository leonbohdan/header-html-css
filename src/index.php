<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    >

    <link
      rel="shortcut icon"
      href="https://img.icons8.com/cotton/64/000000/menu.png"
      type="image/x-icon"
    >

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    >

    <style>
      body {
        background: #eee;
      }

      .header {
        display: flex;
        justify-content: center;
        background-color: black;
        height: 100%;
        width: 100%;
      }

      nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
      }

      .nav-link {
        position: relative;
        display: block;
        background: #000;
        color: #fff;
        text-decoration: none;
        padding: 0.8em 1.8em;
        letter-spacing: 1px;
        width: 150px;

        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;

        transition: color 0.3s ease-in-out;
      }

      .nav-link:hover {
        color: #bbe1fa;
      }

      .nav-item {
        position: relative;
      }

      .nav-item:hover {
        border-bottom-color: #bbe1fa;
      }

      .nav > li {
        float: left;
        border-bottom: 4px #aaa solid;
        margin-right: 1px;
      }

      .nav li a:first-child:nth-last-child(2):before {
        content: "";
        position: absolute;
        height: 0;
        width: 0;
        border: 5px solid transparent;
        top: 50% ;
        right: 5px;
      }

      .nav ul {
        position: absolute;
        white-space: nowrap;
        z-index: -1;
        top: -250px;
        left: 0;
        opacity: 0;
        transition: opacity 0.5s ease-in-out,
          transform 0.5s ease-in-out;
      }

      .nav > .categories:hover > ul {
        left: auto;
        padding-top: 5px;
        min-width: 100%;
        opacity: 1;
        transform: translateY(300px);
      }

      .nav form {
        position: absolute;
        top: -246px;
        white-space: nowrap;
        z-index: -1;
        left: 0;
        width: 300px;
        opacity: 0;
        transition: opacity 0.5s ease-in-out,
          transform 0.5s ease-in-out;
      }

      .cabinet:hover > form {
        left: auto;
        padding-top: 5px;
        min-width: 100%;
        opacity: 1;
        transform: translateY(300px);
      }

      .nav > li li ul {
        border-left: 1px solid #fff;
      }

      .nav > li li:hover > ul {
        left: 100%;
        top: 1px;
        opacity: 1;
      }

      .nav > li > a:first-child:nth-last-child(2):before {
        border-top-color: #fff;
      }

      .nav > li:hover > a:first-child:nth-last-child(2):before {
        border: 5px solid transparent;
        border-bottom-color: #fff;
        margin-top: -5px;
      }

      .nav li li > a:first-child:nth-last-child(2):before {
        border-left-color: #aaa;
        margin-top: -5px;
      }

      .nav li li:hover > a:first-child:nth-last-child(2):before {
        border: 5px solid transparent;
        border-right-color: #aaa;
        right: 10px;
      }

      .link:hover {
        text-decoration: none;
        font-weight: 500;
        border-bottom: 2px dashed #0056be;
      }
    </style>
    <title>Header</title>
  </head>

  <body>

    <?php
      $categories = [
				'Мобільні телефони і гаджети',
				'Ноутбуки і Аксесуари',
				'Комп`ютери',
				'Розумні годинники'
      ];

      $sub_categories = [
        'Ноутбуки',
        'Планшети',
        'Аксесуари до ноутбуків і ПК',
        'Комплектуючі',
        'Комп`ютери',
        'Книги',
        'Відеокарти'
      ];
    ?>

    <header class="header">
      <div class="container">
        <nav>
          <ul class="nav nav-pills">
            <li class="nav-item cabinet">
              <a href="#" class="nav-link cabinet__link">Кабінет</a>

              <form class="rounded border bg-light p-3">

                <div class="d-flex mb-3">
                  <div>
                    <a class="link active" href="#">First Name</a>
                  </div>

                  <div>
                    <a class="link ml-2" href="#">Settings</a>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label ">Label</label>
                  <div class="col-sm-8">
                    <input
                      type="text"
                      class="form-control font-weight-bold text-dark"
                      id="inputEmail3"
                      placeholder="First Name"
                    >
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-4 col-form-label">Placeholder</label>
                  <div class="col-sm-8">
                    <input
                      type="text"
                      class="form-control"
                      id="inputPassword3"
                      placeholder=""
                    >
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4">Required</div>
                  <div class="col-sm-8">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="gridCheck1"
                      >
                    </div>
                  </div>
                </div>
              </form>
            </li>

            <li class="nav-item categories">
              <a href="#" class="nav-link">Категорії</a>

              <ul>
                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link"
                    title="<?php echo ''.$categories[0].'' ; ?>"
                  >
                    <?php echo ''.$categories[0].'' ; ?>
                </a>
                </li>

                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link"
                    title="<?php echo ''.$categories[1].'' ; ?>"
                  >
                    <?php echo ''.$categories[1].'' ; ?>
                  </a>
                </li>

                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link"
                    title="<?php echo ''.$categories[2].'' ; ?>"
                  >
                    <?php echo ''.$categories[2].'' ; ?>
                  </a>

                  <ul>
                    <li class="nav-item">
                      <a
                        href="#"
                        class="nav-link"
                        title="<?php echo ''.$sub_categories[0].'' ; ?>"
                      >
                        <?php echo ''.$sub_categories[0].'' ; ?>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a
                        href="#"
                        class="nav-link"
                        title="<?php echo ''.$sub_categories[1].'' ; ?>"
                      >
                        <?php echo ''.$sub_categories[1].'' ; ?>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a
                        href="#"
                        class="nav-link"
                        title="<?php echo ''.$sub_categories[2].'' ; ?>"
                      >
                        <?php echo ''.$sub_categories[2].'' ; ?>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a
                        href="#"
                        class="nav-link"
                        title="<?php echo ''.$sub_categories[3].'' ; ?>"
                      >
                        <?php echo ''.$sub_categories[3].'' ; ?>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a
                        href="#"
                        class="nav-link"
                        title="<?php echo ''.$sub_categories[4].'' ; ?>"
                      >
                        <?php echo ''.$sub_categories[4].'' ; ?>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a
                        href="#"
                        class="nav-link"
                        title="<?php echo ''.$sub_categories[5].'' ; ?>"
                      >
                        <?php echo ''.$sub_categories[5].'' ; ?>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a
                        href="#"
                        class="nav-link"
                        title="<?php echo ''.$sub_categories[6].'' ; ?>"
                      >
                        <?php echo ''.$sub_categories[6].'' ; ?>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link"
                    title="<?php echo ''.$categories[3].'' ; ?>"
                  >
                    <?php echo ''.$categories[3].'' ; ?>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="scripts/main.js"></script>
  </body>
</html>
