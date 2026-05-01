<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="assets/style.css" />
  <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
  <nav class="navbar navbar-expand-md fixed-top p-3">
    <div class="container-fluid px-md-5">
      <a class="navbar-brand fw-bold text-white" href="index.html">ZaxchTodo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-list">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Upcoming</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="today.php">Today</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="completed.php">Completed</a>
          </li>
        </ul>
        <div class="d-flex gap-3">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <a href="login.html" class="btn btn-danger">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <main class="container d-flex flex-column gap-4" style="margin-top: 90px;">
    <div class="w-100 d-flex justify-content-center">
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createTodoModal">Create
        Todo</button>
    </div>

    <!-- Modal nya -->
    <div class="modal fade" id="createTodoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Create Todo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
              </div>

              <div class="mb-3">
                <label for="deadline" class="form-label">Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline" required>
              </div>

              <div class="mb-3">
                <label for="priority" class="form-label">Priority</label>
                <select class="form-select" id="priority" name="priority" required>
                  <option value="">-- Pilih Priority --</option>
                  <option value="low">Low</option>
                  <option value="medium">Medium</option>
                  <option value="high">High</option>
                </select>
              </div>

              <div class="modal-footer px-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <section class="container">
      <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4 justify-content-center">
        <div class="col w-auto">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <span class="badge bg-warning text-dark mb-2">Pending</span>
              <h1 class="card-title h3">Tugas PBW</h1>
              <p class="card-text">Kerjain tugas PBW pertemuan 5, termasuk coding dan dokumentasi sederhana</p>
              <div class="d-flex align-items-center gap-1">
                <p class="card-text">4 April 2026</p>
              </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <button
                  class="btn btn-secondary btn-detail"
                  data-bs-toggle="modal"
                  data-bs-target="#detailTodoModal"
                  data-title="Testing judul"
                  data-description="Deskripsi todolist ada disini nantinya"
                  data-deadline="15 Apr 2027"
                  data-priority="Low"
                  data-status="Done">
                  Detail
                </button>
              <button class="btn btn-success">
                Done
              </button>
            </div>
          </div>
        </div>
        <div class="col w-auto">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <span class="badge bg-warning text-dark mb-2">Pending</span>
              <h1 class="card-title h3">Title Todo</h1>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat reiciendis
                aut animi quos dignissimos rerum deserunt consectetur facilis a qui at soluta libero cumque
                illo, quasi iusto eaque repellendus nulla?</p>
              <div class="d-flex align-items-center gap-1">
                <p class="card-text">4 April 2026</p>
              </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <button
                  class="btn btn-secondary btn-detail"
                  data-bs-toggle="modal"
                  data-bs-target="#detailTodoModal"
                  data-title="Testing judul"
                  data-description="Deskripsi todolist ada disini nantinya"
                  data-deadline="15 Apr 2027"
                  data-priority="Low"
                  data-status="Done">
                  Detail
                </button>
              <button class="btn btn-success">
                Done
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal detail todo -->
    <div class="modal fade" id="detailTodoModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title">Detail Todo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">
            <h5 id="detailTitle"></h5>
            <p id="detailDescription"></p>

            <p><strong>Deadline:</strong> <span id="detailDeadline"></span></p>
            <p><strong>Priority:</strong> <span id="detailPriority"></span></p>
            <p><strong>Status:</strong> <span id="detailStatus"></span></p>
          </div>

          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
  </main>

  <script src="assets/index.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</body>

</html>