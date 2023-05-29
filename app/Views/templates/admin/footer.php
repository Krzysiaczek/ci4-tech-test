        </main>
        <!-- this overlay is activated only when mobile menu is triggered -->
        <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
        <!-- END Page Content -->

        <!-- BEGIN Page Footer -->
        <footer class="page-footer" role="contentinfo">
            <div class="d-flex align-items-center flex-1 text-muted">
                <span class="hidden-md-down fw-700">2020 © SmartAdmin by&nbsp;<a href='https://www.gotbootstrap.com'
                        class='text-primary fw-500' title='gotbootstrap.com' target='_blank'>gotbootstrap.com</a></span>
            </div>
            <div>
                <ul class="list-table m-0">
                    <li><a href="<?= route_to('admin.home')?>"" class="text-secondary fw-700">About</a></li>
                    <li class="pl-3"><a href="info_app_licensing.html" class="text-secondary fw-700">License</a></li>
                    <li class="pl-3"><a href="info_app_docs.html" class="text-secondary fw-700">Documentation</a></li>
                    <li class="pl-3 fs-xl"><a href="https://wrapbootstrap.com/user/MyOrange" class="text-secondary"
                            target="_blank"><i class="fal fa-question-circle" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </footer>
        <!-- END Page Footer -->

        <?= $this->include('templates/admin/modals/shortcuts') ?>
        <?= $this->include('templates/admin/modals/colorprofile') ?>

        </div>
    </div>
</div>
<!-- END Page Wrapper -->

<?= $this->include('templates/admin/modals/quickmenu') ?>
<?= $this->include('templates/admin/modals/messenger') ?>
<?= $this->include('templates/admin/modals/settings') ?>

<!-- base vendor bundle:
        DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations
                + pace.js (recommended)
                + jquery.js (core)
                + jquery-ui-cust.js (core)
                + popper.js (core)
                + bootstrap.js (core)
                + slimscroll.js (extension)
                + app.navigation.js (core)
                + ba-throttle-debounce.js (core)
                + waves.js (extension)
                + smartpanels.js (extension)
                + src/../jquery-snippets.js (core) -->
<script src="/assets/libraries/smartadmin/js/vendors.bundle.js"></script>
<script src="/assets/libraries/smartadmin/js/app.bundle.js"></script>


<!--This page contains the basic JS and CSS files to get started on your project. If you need aditional addon's or plugins please see scripts located at the bottom of each page in order to find out which JS/CSS files to add.-->

<script src="/assets/libraries/smartadmin/js/datagrid/datatables/datatables.bundle.js"></script>
<script>
    /* demo scripts for change table color */
    /* change background */
    $(function() {
        $('#myTable').DataTable({
            columnDefs: [
                {
                    targets: 5,
                    data: "slug",
                    data_name: "username",
                    render: function ( data, type, row, meta ) {
                        return '<a href="/admin/user/'+data+'" target="_self">'+data+'</a>';
                    }
                },
                {
                    target: 6,
                    visible: false,
                    searchable: false,
                }
            ],
            responsive: true
        });

        $('.js-thead-colors a').on('click', function()
        {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
        });

        $('.js-tbody-colors a').on('click', function()
        {
            var theadColor = $(this).attr("data-bg");
            console.log(theadColor);
            $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
        });
    });

</script>
</body>
<!-- END Body -->

</html>