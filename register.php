<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->

            <nav
              class="navbar navbar-expand-sm navbar-light bg-light"
            >
              <div class="container">
                <a class="navbar-brand" href="index.php">StudentPortal</a>
                <button
                  class="navbar-toggler d-lg-none"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapsibleNavId"
                  aria-controls="collapsibleNavId"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" href="fetchregister.php" aria-current="page"
                        >studentdata
                        <span class="visually-hidden">(current)</span></a
                      >
                    </li>
                </div>
                    <a href="login.php">
                      <button type="button" class="btn btn-outline-info m-2">login</button>
                    </a>
                    <a href="register.php">
                      <button type="button" class="btn btn-outline-success m-2">register</button>
                    </a>
              </div>
            </nav>
            
        </header>

        <main>
             <h1 class="text-center"> REGISTER FROM</h1>
    <form action="registerdb.php" method="POST">
    <div class="mb-5 m-5 border border-dark p-5">
  <label  class="form-label">Enter your name</label>
  <input type="text" class="form-control" name="name">
    <label  class="form-label">Enter your email</label>
  <input type="email" class="form-control" name="email">
    <label  class="form-label">Enter your Password</label>
  <input type="password" class="form-control" name="password">
    <label  class="form-label">Enter your address</label>
  <input type="text" class="form-control" name="address">
    <label  class="form-label">Enter your Phone</label>
  <input type="tel" class="form-control" name="phone">
    <button type="submit" name="register" class="btn btn-primary mt-4">register</button>
</div>



            </form>
        </main>

                <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
