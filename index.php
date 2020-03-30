<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>timelineapp</title>
    <link rel="stylesheet" href="dists/css/bootstrap.min.css">
    <link rel="stylesheet" href="dists/css/jquery-ui.css">
    <link rel="stylesheet" href="dists/css/style.css">
</head>
<body>


    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 app-list">
                    <h1>Apps</h1>
                    <p>24 lists of applications</p>
                    <form>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <div class="height-20"></div>
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">Add app</button>

                    <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">App name:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-block">add App</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <h3>jQuery app</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h3>jQuery app</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 app-view">
                    
                    <div class="card">
                        <div class="card-body">
                            <h2>jQuery app</h2>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <hr>
                            <div class="row">
                                <div class="col-md-8">
                                <form>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block">Add update</button>
                                </div>
                            </form>
                                </div>
                            </div>
                            <div class="height-20"></div>
                            <div class="card">
                                <h4>28, March 2020</h4>
                                <p>Heading is changed</p>
                                <p>The new image is uploaded</p>
                                <p>Social icons are added to the footer</p>
                            </div>
                            <div class="card">
                                <h4>28, March 2020</h4>
                                <p>Heading is changed</p>
                            </div>
                            <div class="card">
                                <h4>28, March 2020</h4>
                                <p>Heading is changed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>


    <script src="dists/js/jquery-3.4.1.min.js"></script>
    <script src="dists/js/jquery-ui.js"></script>
    <script src="dists/js/bootstrap.min.js"></script>
    <script src="dists/js/script.js"></script>
</body>
</html>