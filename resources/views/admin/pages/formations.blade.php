@extends("admin.template",['titre'=>"Home"])

@push("style")

@endpush
@section("content")
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page has-sidebar has-sidebar-fluid has-sidebar-expand-xl">
            <!-- .page-inner -->
            <div class="page-inner page-inner-fill position-relative">
                <header class="shadow-sm page-navs bg-light">
                    <!-- .input-group -->
                    <div class="input-group has-clearable">
                        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i
                                    class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend"
                            for="searchClients"><span class="input-group-text"><span
                                    class="oi oi-magnifying-glass"></span></span></label> <input type="text"
                            class="form-control" id="searchClients" data-filter=".board .list-group-item"
                            placeholder="Find clients">
                    </div><!-- /.input-group -->
                </header><button type="button" class="btn btn-primary btn-floated position-absolute" data-toggle="modal"
                    data-target="#clientNewModal" title="Add new client"><i class="fa fa-plus"></i></button>
                <!-- board -->
                <div class="p-0 board perfect-scrollbar">
                    <!-- .list-group -->
                    <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
                        @forelse ($formations as $f)
                        <!-- .list-group-item -->
                        <div class="list-group-item active" data-toggle="sidebar" data-sidebar="show">
                            <a href="#" class="stretched-link"></a> <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                                <div class="tile tile-circle bg-blue"> Z </div>
                            </div><!-- /.list-group-item-figure -->
                            <!-- .list-group-item-body -->
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title"> Zathunicon, Inc. </h4>
                                <p class="list-group-item-text"> San Francisco, United States </p>
                            </div><!-- /.list-group-item-body -->
                        </div><!-- /.list-group-item -->
                       @empty

                       @endforelse

                        <!-- .list-group-item -->
                        <div class="list-group-item">
                            <!-- .list-group-item-body -->
                            <div class="py-4 text-center list-group-item-body">
                                <!-- .spinner -->
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div><!-- /.spinner -->
                            </div><!-- /.list-group-item-body -->
                        </div><!-- /.list-group-item -->
                    </div><!-- /.list-group -->
                </div>
                <!-- /board -->
            </div><!-- /.page-inner -->
            <!-- .page-sidebar -->
            <div class="page-sidebar bg-light">
                <!-- .sidebar-header -->
                <header class="sidebar-header d-xl-none">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="#" onclick="Looper.toggleSidebar()"><i
                                        class="mr-2 breadcrumb-icon fa fa-angle-left"></i>Back</a>
                            </li>
                        </ol>
                    </nav>
                </header><!-- /.sidebar-header -->
                <!-- .sidebar-section -->
                <div class="sidebar-section sidebar-section-fill">
                    <h1 class="page-title">
                        <i class="mr-2 far fa-building text-muted"></i> Zathunicon, Inc.
                    </h1>
                    <p class="text-muted"> San Francisco, United States </p><!-- .nav-scroller -->
                    <div class="nav-scroller border-bottom">
                        <!-- .nav-tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#client-billing-contact">
                                   Detail
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#client-tasks">
                                    Modification
                                </a>
                            </li>
                        </ul><!-- /.nav-tabs -->
                    </div><!-- /.nav-scroller -->
                    <!-- .tab-content -->
                    <div class="pt-4 tab-content" id="clientDetailsTabs">
                        <!-- .tab-pane -->
                        <div class="tab-pane fade show active" id="client-billing-contact" role="tabpanel"
                            aria-labelledby="client-billing-contact-tab">
                            <!-- .card -->
                            <div class="card">
                                <!-- .card-body -->
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h2 id="client-billing-contact-tab" class="card-title"> Billing Address </h2>
                                        <button type="button" class="btn btn-link" data-toggle="modal"
                                            data-target="#clientBillingEditModal">Edit</button>
                                    </div>
                                    <address> 280 Suzanne Throughway, Breannabury<br> San Francisco, 45801<br> United
                                        States </address>
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                            <!-- .card -->
                            <div class="mt-4 card">
                                <!-- .card-body -->
                                <div class="card-body">
                                    <h2 class="card-title"> Contacts </h2><!-- .table-responsive -->
                                    <div class="table-responsive">
                                        <table class="table table-hover" style="min-width: 678px">
                                            <thead>
                                                <tr>
                                                    <th> Name </th>
                                                    <th> Email </th>
                                                    <th> Phone </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle"> Alexane Collins </td>
                                                    <td class="align-middle"> fhauck@gmail.com </td>
                                                    <td class="align-middle"> (062) 109-9222 </td>
                                                    <td class="text-right align-middle">
                                                        <button type="button" class="btn btn-sm btn-icon btn-secondary"
                                                            data-toggle="modal" data-target="#clientContactEditModal"><i
                                                                class="fa fa-pencil-alt"></i> <span
                                                                class="sr-only">Edit</span></button> <button
                                                            type="button" class="btn btn-sm btn-icon btn-secondary"><i
                                                                class="far fa-trash-alt"></i> <span
                                                                class="sr-only">Remove</span></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /.table-responsive -->
                                </div><!-- /.card-body -->
                                <!-- .card-footer -->
                                <div class="card-footer">
                                    <a href="#clientContactNewModal" class="card-footer-item" data-toggle="modal"><i
                                            class="mr-1 fa fa-plus-circle"></i> Add contact</a>
                                </div><!-- /.card-footer -->
                            </div><!-- /.card -->
                        </div><!-- /.tab-pane -->
                        <!-- .tab-pane -->
                        <div class="tab-pane fade" id="client-tasks" role="tabpanel" aria-labelledby="client-tasks-tab">
                            <!-- .card -->
                            <div class="card">
                                <!-- .card-body -->
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h3 id="client-tasks-tab" class="card-title"> To do </h3>
                                        <div class="card-title-control">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-icon btn-light"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-arrow"></div>
                                                    <h6 class="dropdown-header"> Sort by </h6><label
                                                        class="custom-control custom-radio stop-propagation"><input
                                                            type="radio" class="custom-control-input" name="todoSorting"
                                                            value="0" checked> <span class="custom-control-label">My
                                                            order</span></label> <label
                                                        class="custom-control custom-radio stop-propagation"><input
                                                            type="radio" class="custom-control-input" name="todoSorting"
                                                            value="1"> <span class="custom-control-label">Due
                                                            date</span></label>
                                                    <div class="dropdown-divider"></div><button type="button"
                                                        class="dropdown-item">Rename list</button> <button type="button"
                                                        class="dropdown-item">Delete completed todos</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .todo-list -->
                                    <div class="todo-list todo-list-bordered" data-toggle="sortable"
                                        data-draggable=".todo" data-handle=".drag-handle">
                                        <!-- .todo -->
                                        <div class="todo">
                                            <!-- .custom-control -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="todo1"> <label
                                                    class="custom-control-label" for="todo1"><span>Add payment method to
                                                        user-billing page</span></label>
                                            </div><!-- /.custom-control -->
                                            <!-- .todo-actions -->
                                            <div class="todo-actions d-block">
                                                <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="1">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-todoid="1"><i class="fa fa-pencil-alt"></i></button>
                                            </div><!-- /.todo-actions -->
                                        </div><!-- /.todo -->
                                        <!-- .todo -->
                                        <div class="todo">
                                            <!-- .custom-control -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="todo3"> <label
                                                    class="custom-control-label" for="todo3"><span>Add view / edit task
                                                        modal</span></label>
                                            </div><!-- /.custom-control -->
                                            <!-- .todo-actions -->
                                            <div class="todo-actions d-block">
                                                <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="3">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-todoid="3"><i class="fa fa-pencil-alt"></i></button>
                                            </div><!-- /.todo-actions -->
                                        </div><!-- /.todo -->
                                        <!-- .todo -->
                                        <div class="todo">
                                            <!-- .custom-control -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="todo4"> <label
                                                    class="custom-control-label" for="todo4"><span>Increase app-aside
                                                        zindex on screen md & up</span></label>
                                            </div><!-- /.custom-control -->
                                            <!-- .todo-actions -->
                                            <div class="todo-actions d-block">
                                                <small class="pb-1 text-muted border-bottom border-warning"
                                                    data-toggle="tooltip" title="22 Sep">Today</small>
                                                <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="4">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-todoid="4"><i class="fa fa-pencil-alt"></i></button>
                                            </div><!-- /.todo-actions -->
                                        </div><!-- /.todo -->
                                        <!-- .todo -->
                                        <div class="todo">
                                            <!-- .custom-control -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="todo9"> <label
                                                    class="custom-control-label" for="todo9"><span>Fixed overlap
                                                        flatpickr zindex in modal</span></label>
                                            </div><!-- /.custom-control -->
                                            <!-- .todo-actions -->
                                            <div class="todo-actions d-block">
                                                <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="9">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-todoid="9"><i class="fa fa-pencil-alt"></i></button>
                                            </div><!-- /.todo-actions -->
                                        </div><!-- /.todo -->
                                        <!-- .todo -->
                                        <div class="todo">
                                            <!-- .custom-control -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="todo11"> <label
                                                    class="custom-control-label" for="todo11"><span>Add filterlist fn to
                                                        main script</span></label>
                                            </div><!-- /.custom-control -->
                                            <!-- .todo-actions -->
                                            <div class="todo-actions d-block">
                                                <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="11">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-todoid="11"><i class="fa fa-pencil-alt"></i></button>
                                            </div><!-- /.todo-actions -->
                                        </div><!-- /.todo -->
                                        <!-- .todo -->
                                        <div class="todo">
                                            <!-- .custom-control -->
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="todo14"> <label
                                                    class="custom-control-label" for="todo14"><span>Reinvent apple fonts
                                                        system</span></label>
                                            </div><!-- /.custom-control -->
                                            <!-- .todo-actions -->
                                            <div class="todo-actions d-block">
                                                <div class="btn btn-sm btn-icon btn-light drag-handle" data-todoid="14">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                    data-todoid="14"><i class="fa fa-pencil-alt"></i></button>
                                            </div><!-- /.todo-actions -->
                                        </div><!-- /.todo -->
                                    </div><!-- /.todo-list -->
                                </div><!-- /.card-body -->
                                <!-- .card-footer -->
                                <div class="card-footer">
                                    <a href="#" class="card-footer-item"><i class="mr-1 fa fa-plus-circle"></i> Add
                                        todo</a>
                                </div><!-- /.card-footer -->
                            </div><!-- /.card -->
                            <!-- .card -->
                            <div class="card">
                                <div class="border-0 card-header" id="headingCompletedTodo">
                                    <button class="btn btn-block btn-reset d-flex justify-content-between collapsed"
                                        data-toggle="collapse" data-target="#completedTodo" aria-expanded="false"
                                        aria-controls="completedTodo"><span><i
                                                class="mr-2 fa fa-history text-muted"></i> Completed (27)</span> <span
                                            class="collapse-indicator"><i
                                                class="fa fa-fw fa-chevron-down"></i></span></button>
                                </div>
                                <div id="completedTodo" class="collapse" aria-labelledby="headingCompletedTodo">
                                    <div class="pt-0 card-body">
                                        <!-- .todo-list -->
                                        <div class="todo-list todo-list-bordered" data-toggle="sortable"
                                            data-draggable=".todo" data-handle=".drag-handle">
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo2"
                                                        checked> <label class="custom-control-label"
                                                        for="todo2"><span>Sidebar enhancement: adding fluid width &
                                                            expand classes like bootstrap navbar</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="2">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="2"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo5"
                                                        checked> <label class="custom-control-label"
                                                        for="todo5"><span>Change stacked-menu bg to
                                                            transparent</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="5">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="5"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo6"
                                                        checked> <label class="custom-control-label"
                                                        for="todo6"><span>Fix color-picker</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="6">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="6"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo7"
                                                        checked> <label class="custom-control-label"
                                                        for="todo7"><span>Add create new task modal</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="7">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="7"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo8"
                                                        checked> <label class="custom-control-label"
                                                        for="todo8"><span>Add flagging class for macos</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="8">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="8"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo10"
                                                        checked> <label class="custom-control-label"
                                                        for="todo10"><span>Mark toastr as a deprecated
                                                            dependencies</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="10">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="10"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo12"
                                                        checked> <label class="custom-control-label"
                                                        for="todo12"><span>Fix or remove
                                                            .custom-control-nolabel</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="12">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="12"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo13"
                                                        checked> <label class="custom-control-label"
                                                        for="todo13"><span>Change datatables sort icons</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="13">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="13"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo15"
                                                        checked> <label class="custom-control-label"
                                                        for="todo15"><span>Improve jqvmap zoom buttons</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="15">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="15"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo16"
                                                        checked> <label class="custom-control-label"
                                                        for="todo16"><span>Improve pagination active bg</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="16">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="16"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo17"
                                                        checked> <label class="custom-control-label"
                                                        for="todo17"><span>Fix knobify footer item</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="17">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="17"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo18"
                                                        checked> <label class="custom-control-label"
                                                        for="todo18"><span>Handle autofocus input when modal/dropdown
                                                            shown</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="18">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="18"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo19"
                                                        checked> <label class="custom-control-label"
                                                        for="todo19"><span>Add new tasks list input</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="19">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="19"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo20"
                                                        checked> <label class="custom-control-label"
                                                        for="todo20"><span>Add page fullscreen behavior</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="20">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="20"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo21"
                                                        checked> <label class="custom-control-label"
                                                        for="todo21"><span>Make content layout fluid</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="21">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="21"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo22"
                                                        checked> <label class="custom-control-label"
                                                        for="todo22"><span>Different render line-height between OS due
                                                            to different font-family</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="22">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="22"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo23"
                                                        checked> <label class="custom-control-label"
                                                        for="todo23"><span>Add scrollable content to tasks
                                                            component</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="23">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="23"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo24"
                                                        checked> <label class="custom-control-label"
                                                        for="todo24"><span>Fixed .message-title
                                                            line-height</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="24">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="24"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo25"
                                                        checked> <label class="custom-control-label"
                                                        for="todo25"><span>Re-order navigations</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="25">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="25"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo26"
                                                        checked> <label class="custom-control-label"
                                                        for="todo26"><span>Add modal right & left</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="26">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="26"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo27"
                                                        checked> <label class="custom-control-label"
                                                        for="todo27"><span>Clean up line-height comments</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="27">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="27"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo28"
                                                        checked> <label class="custom-control-label"
                                                        for="todo28"><span>Improved grays color scheme</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="28">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="28"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo29"
                                                        checked> <label class="custom-control-label"
                                                        for="todo29"><span>Prevent form-control height since
                                                            v4.1.3</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="29">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="29"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo30"
                                                        checked> <label class="custom-control-label"
                                                        for="todo30"><span>Fixed item align on
                                                            dropdown-sheet</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="30">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="30"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo31"
                                                        checked> <label class="custom-control-label"
                                                        for="todo31"><span>Re-store pooper.js due to lack of dropdown
                                                            position on bootstrap-bundle</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="31">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="31"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo32"
                                                        checked> <label class="custom-control-label"
                                                        for="todo32"><span>Update Bootstrap to v4.1.3</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="32">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="32"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo33"
                                                        checked> <label class="custom-control-label"
                                                        for="todo33"><span>Add animation class to
                                                            .progress</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="33">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="33"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                            <!-- .todo -->
                                            <div class="todo">
                                                <!-- .custom-control -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="todo34"
                                                        checked> <label class="custom-control-label"
                                                        for="todo34"><span>Remove popper.js from package.json - use
                                                            bootstrap-bundle instead</span></label>
                                                </div><!-- /.custom-control -->
                                                <!-- .todo-actions -->
                                                <div class="todo-actions d-block">
                                                    <div class="btn btn-sm btn-icon btn-light drag-handle"
                                                        data-todoid="34">
                                                        <i class="fa fa-arrows-alt"></i>
                                                    </div><button type="button" class="btn btn-sm btn-icon btn-light"
                                                        data-todoid="34"><i class="fa fa-trash-alt"></i></button>
                                                </div><!-- /.todo-actions -->
                                            </div><!-- /.todo -->
                                        </div><!-- /.todo-list -->
                                    </div>
                                </div>
                            </div><!-- /.card -->
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div><!-- /.sidebar-section -->
            </div><!-- /.page-sidebar -->
            <!-- Keep in mind that modals should be placed outsite of page sidebar -->
            <!-- .modal -->
            <form id="clientNewForm" name="clientNewForm" data-parsley-validate>
                <div class="modal fade" id="clientNewModal" tabindex="-1" role="dialog"
                    aria-labelledby="clientNewModalLabel" aria-hidden="true">
                    <!-- .modal-dialog -->
                    <div class="modal-dialog" role="document">
                        <!-- .modal-content -->
                        <div class="modal-content">
                            <!-- .modal-header -->
                            <div class="modal-header">
                                <h6 id="clientNewModalLabel" class="modal-title inline-editable">
                                    <span class="sr-only">Titre du cours</span>
                                    <input type="text" name="title" id="title" class="form-control form-control-lg"
                                    placeholder="Titre du cours" required="">
                                </h6>
                            </div><!-- /.modal-header -->
                            <!-- .modal-body -->
                            <div class="modal-body">
                                <!-- .form-row -->
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cnContactName">sous titre</label>
                                            <input type="text" name="subtitle" id="subtitle" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cnContactEmail">Catégorie</label>
                                            <input type="text" name="categorie" id="categorie" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="tf3">Image de couverture
                                            <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                                data-container="body"
                                                title="Une image qui sera affichée lorsque la vidéo n'est pas encore lue (270X310)"></i>
                                        </label>
                                        <div class="custom-file">
                                            <input name="thumbnail_url" type="file" class="custom-file-input"
                                                id="thumbnail_url" multiple>
                                            <label class="custom-file-label" for="">Choisir fichier</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cnContactEmail">Lien de la vidéo</label>
                                            <input type="text" name="video" id="video" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cnZip">Description du cours</label>
                                            <textarea data-toggle="simplemde" data-spellchecker="false" name="description" class="form-control"
                                            data-autosave='{ "enabled": true, "unique_id": "SimpleMDEDemo" }'></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cnCountry">Est active</label>
                                            <select id="is_active" name="is_active"
                                                class="custom-select d-block w-100" required>
                                                <option value="" >Choisissez... </option>
                                                <option value="1">UOI </option>
                                                <option value="0">NON</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cnCountry">Est accessible</label>
                                            <select id="access" name="access"
                                                class="custom-select d-block w-100" required>
                                                <option value="" >Choisissez... </option>
                                                <option value="1">UOI </option>
                                                <option value="0">NON</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- /.form-row -->
                            </div><!-- /.modal-body -->
                            <!-- .modal-footer -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button> <button type="button"
                                    class="btn btn-light" data-dismiss="modal">Close</button>
                            </div><!-- /.modal-footer -->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
            </form><!-- /.modal -->

        </div><!-- /.page -->
    </div><!-- /.wrapper -->
</main>
@endsection

@push("script")


<script>
     $("#clientNewForm").on("submit", function (e) {

var formElement = document.getElementById('clientNewForm');
// Sélectionner le checkbox en utilisant son identifiant
// Créer un objet FormData à partir de l'élément de formulaire

if ($('#clientNewForm').parsley().isValid()) {
    e.preventDefault();
        // Le formulaire est valide, soumettez-le

        var formData = new FormData(formElement);
        var isLiveValue1 = document.getElementById('is_video').checked?'1':"0";
        formData.append('is_video', isLiveValue1);
        var isLiveValue2 = document.getElementById('is_seminary').checked?'1':"0";
        formData.append('is_seminary', isLiveValue2);
            // Accéder au champ de type file
            var fileInput = formElement.querySelector('input[type="file"]');
            // Vérifier si un fichier a été sélectionné
                    if (fileInput.files.length > 0) {
                        var file = fileInput.files[0];
                        console.log("Nom du fichier : " + file.name);
                        console.log("Taille du fichier : " + file.size);
                        console.log("Type MIME du fichier : " + file.type);

                        // Ajouter le champ de type file à l'objet FormData
                        formData.append('file', file);
                        console.log("for : " + formData);
                    }
                         add(formData, 'POST', 'addFormation',"#clientNewForm")
    } else {
        // La validation a échoué, ne soumettez pas le formulaire
        e.preventDefault();
        console.log('validation errure')
    }
});
                function remplirFile(idFile,idText){
                    document.getElementById(idFile).addEventListener('change', function() {
                        console.log(this.files[0].name)
                        const selectedFile = document.getElementById(idText);
                        if (this.files.length > 0) {
                            selectedFile.textContent = 'Fichier sélectionné : ' + this.files[0].name;
                        } else {
                            selectedFile.textContent = '';
                        }
                    });
                }
                function chekBoks(idCheck,idDivChamp){
                    const checkbox = document.getElementById(idCheck);
                    const champFormulaire = document.getElementById(idDivChamp);

                    if (checkbox.checked) {
                        champFormulaire.removeAttribute('hidden');
                        champFormulaire.removeAttribute('required');
                    } else {
                        champFormulaire.setAttribute('hidden',true);
                        champFormulaire.setAttribute('required',true);
                    }

                    checkbox.addEventListener('change', function() {
                        if (this.checked) {
                            champFormulaire.removeAttribute('hidden');
                        } else {
                            champFormulaire.setAttribute('hidden',true);
                        }
                    });
                }
                function addAll(form, mothode, url,idf) {
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var f = form;
                    var u = url;
                    var idform = idf;
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })
                        //  console.log($(form).serialize())
                    $.ajax({
                        url: u,
                        method: mothode,
                        data: $(f).serialize(),
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function (data) {
                            if (!data.reponse) {
                                var errorMessage = '';
                            $.each(data.errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                                Swal.fire({
                                    title: data.msg+" : "+errorMessage,
                                    icon: 'error'
                                })
                            } else {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })

                                $(idform)[0].reset();
                                actualiser();
                            }

                        },
                        error: function(xhr, status, error){
                            // alerte("ok")
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            $.each(errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                             // Afficher les erreurs de validation à l'utilisateur
                                Swal.fire({
                                    title: xhr.msg,
                                    html: errorMessage,
                                        icon: 'error'
                                    })
                            }
                    });
                }

                function add(form, mothode, url,idf) {
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    var f = form;
                    var u = url;
                    var idform = idf;
                    Swal.fire({
                        title: 'Merci de patienter...',
                        icon: 'info'
                    })
                        console.log(form)
                    $.ajax({
                        url: u,
                        method: mothode,
                        data: form,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function (data) {

                            if (!data.reponse) {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'error'
                                })
                            } else {
                                Swal.fire({
                                    title: data.msg,
                                    icon: 'success'
                                })

                                $(idform)[0].reset();
                                actualiser();
                            }

                        },
                        error: function(xhr, status, error){
                            // alrte("ok")
                            var errors = xhr.responseJSON.errors;
                            var errorMessage = '';
                            $.each(errors, function(key, value){
                                errorMessage += value + '<br>';
                            });
                             // Afficher les erreurs de validation à l'utilisateur
                                Swal.fire({
                                    title: xhr.msg,
                                    html: errorMessage,
                                        icon: 'error'
                                    })
                            }
                    });
                }
                //
                function actualiser() {
                    location.reload();
                }

                function supprimerPopup(id) {
                    var popup = document.getElementById(id); // Identifier l'élément du pop-up
                    if (popup) {
                        popup.remove(); // Supprimer l'élément du DOM
                    }
                }
                function deleted(id, url) {
                    Swal.fire({
                        title: "Attention Suppression",
                        text: "Êtes-vous sûr de vouloir supprimer cette information?",
                        icon: 'warning',
                        inputAttributes: {
                            autocapitalize: "off"
                        },
                        showCancelButton: true,
                        confirmButtonText: "OUI",
                        cancelButtonText: "NON",
                        showLoaderOnConfirm: true,
                        preConfirm: async (login) => {
                            // alert('alert')
                        },
                        allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: 'Merci de patienter...',
                                icon: 'info'
                            })
                            $.ajax({
                                url: url + '/' + id,
                                method: "GET",
                                success: function (data) {
                                    if (!data.reponse) {
                                        Swal.fire({
                                            title: data.msg,
                                            icon: 'error'
                                        })
                                    } else {
                                        Swal.fire({
                                            title: data.msg,
                                            icon: 'success'
                                        })
                                        actualiser();
                                    }
                                },
                            });
                        }
                    });
                }
</script>
@stack('scripts')
@endpush
