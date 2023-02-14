<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DC Comics</title>

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>
    <body>
        <div class="container">
            <div class="row">
                <form action="">
                    @csrf
                    <!--title-->
                    <div class="mb-3">
                        <label class="form-label">
                            title:
                        </label>
                        <input type="text" class="form-control" name="title"  >
                    </div>
                    <!--description-->
                    <div class="mb-3">
                        <label class="form-label">
                            description:
                        </label>
                        <input type="text" class="form-control" name="description"  >
                    </div>
                    <!--thumb-->
                    <div class="mb-3">
                        <label class="form-label">
                            thumb:
                        </label>
                        <input type="text" class="form-control" name="thumb"  >
                    </div>
                    <!--price-->
                    <div class="mb-3">
                        <label class="form-label">
                            price:
                        </label>
                        <input type="text" class="form-control" name="price"  >
                    </div>
                    <!--series-->
                    <div class="mb-3">
                        <label class="form-label">
                            series:
                        </label>
                        <input type="text" class="form-control" name="series"  >
                    </div>
                    <!--sale_date-->
                    <div class="mb-3">
                        <label class="form-label">
                            sale_date:
                        </label>
                        <input type="text" class="form-control" name="sale_date"  >
                    </div>
                    <!--type-->
                    <div class="mb-3">
                        <label class="form-label">
                            type:
                        </label>
                        <input type="text" class="form-control" name="type">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>