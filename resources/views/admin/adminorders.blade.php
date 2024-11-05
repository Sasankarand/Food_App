<!DOCTYPE html>
<html lang="en">
<head>
    <title>Users</title>
</head>
<body>
    <x-app-layout>
        <!DOCTYPE html>
            <html lang="en">
                <head>

                            @include("admin.admincss")

                </head>

                <body>
                    <div class="container-scroller">

                    @include("admin.navbar")
                        <div>
                            @include("admin.OrderTable")
                        </div>

                    </div>

                            @include("admin.adminscript")


                </body>

            </html>

    </x-app-layout>


</body>
</html>
