<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Reminder</title>
    <!-- Bootstrap icons-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('assets/css/ustyle.css') }}">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Mail Reminder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="reminder">Reminder</a></li>
                    <li class="nav-item"><a class="nav-link" href="profile">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->

    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i>
                </div>
                <h2 class="fw-bolder">Get in touch</h2>
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
                    Add New E-MAIL
                </button>
            </div>
            <form action="" method="post">
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title" id="addtitle">Add New Email</h4>
                                <h4 class="modal-title" id="updatetitle" style="display: none;">Update Email</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" id="event_detail">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text"
                                        placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Full name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email"
                                        placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                                        required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="titles" type="text"
                                        placeholder="Enter email title.." data-sb-validations="required" />
                                    <label for="titles">Email title</label>
                                    <div class="invalid-feedback" data-sb-feedback="titles:required">A title is
                                        required.
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                        style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                        required.
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="schedules" type="datetime-local"
                                        placeholder="Enter Schedule send.." data-sb-validations="required" />
                                    <label for="schedules">Schedule send</label>
                                    <div class="invalid-feedback" data-sb-feedback="schedules:required">A schedules is
                                        required.
                                    </div>
                                </div>

                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary " name="sendNow" id="sendNow"
                                    data-bs-dismiss="modal">Send Now</button>
                                <input type="hidden" name="eid" id="eid">
                                <button type="submit" class="btn btn-warning " name="sendLater" id="sendLater"
                                    data-bs-dismiss="modal">Send Later</button>
                                <button type="submit" class="btn btn-danger" name="closeEmail"
                                    data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <h2 class="fw-bolder">List of Email</h2>
            <table id="emailt" class="display">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email address</th>
                        <th>Email Title</th>
                        <th>Message</th>
                        <th>Send or Not</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>jainik nileshbhai k</td>
                        <td>jay@gmail.com</td>
                        <td>Test</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dignissimos cum nihil hic
                            magni quasi exercitationem atque, quisquam, dolor quo, porro fuga quis commodi. Ut quam
                            eligendi fuga adipisci temporibus.</td>
                        <td>yes</td>
                        <td>edit and delete</td>
                    </tr>

                </tbody>
            </table>

        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-5">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $('#emailt').DataTable({
                "pageLength": 5
            });

        });
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
