@include('admin.layouts.header')
{{--@include('admin.layouts.navbar')--}}
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin: 0!important">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3>
            تعديل السلايدر

        </h3>
        <a href="/wp-admin"><h3>رجوع للوحة التحكم</h3></a>
    </section>

    <!-- Main content -->
    <section class="content">
        <div id="app">
            <derar-slider></derar-slider>

        </div>
    </section>
    <!-- /.content -->
</div>

@include('admin.layouts.footer')