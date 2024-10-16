<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>TaskMaster</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/logos/taskmaster.svg" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <style>
        .toolbar {
            display: flex;
            align-items: center;
            width: 100%;
            background-color: black !important;
        }
    </style>
</head>

<body id="kt_body" class="aside-enabled">

    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div id="kt_header" class="header  align-items-stretch">
                    <div class="header-brand">
                        <a href="index.php">
                            <svg fill="#0925ae" width="40px" height="40px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" stroke="#0925ae">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path d="M7.93,8.24,5.26,5.58,4,6.85l3.94,3.94L16,2.7,14.74,1.43,13,3.17,11.2,5Zm3.27,4H2.8V3.8H11L12.75,2H1V14H13V7.13l-1.8,1.8Z" />
                                    </g>
                                </g>

                            </svg>
                            <span style="color: white; font-size:18px;">TaskMaster</span>
                        </a>

                    </div>
                    <div class="toolbar d-flex align-items-stretch">
                        <div
                            class=" container-xxl  py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                            <div class="page-title d-flex justify-content-center flex-column me-5">
                                <h1 class="d-flex flex-column text-gray-900 fw-bold fs-3 mb-0">
                                </h1>
                            </div>
                            <div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <i class="fa-light fa-sun-bright fs-1"></i></a>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu" style="">
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2 active" data-kt-element="mode" data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fa-light fa-sun-bright fs-2">
                                                    </i> </span>
                                                <span class="menu-title">
                                                    Light
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fa-sharp fa-solid fa-moon fs-2"></i> </span>
                                                <span class="menu-title">
                                                    Dark
                                                </span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-md-4">
                                    <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                                    <div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor"></path>
                                                <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor"></path>
                                                <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor"></rect>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                        <div class="menu-item px-5">
                                            <a href="logout.php" class="menu-link px-5">
                                                Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content d-flex flex-column flex-column-fluid " id="kt_content">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class=" container-xxl ">
                            <div class="row">
                                <div class="app-toolbar mb-4">
                                    <div class="app-container d-flex flex-stack">
                                        <div class="d-flex gap-2 gap-lg-3 text-end">
                                            <a href="" class="btn btn-light-primary me-3 text-end"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_1">Add task</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">List of Tasks </span>
                                                <span class="text-muted mt-1 fw-semibold fs-7">check your tasks</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active"
                                                            data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">All</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1"
                                                            data-bs-toggle="tab"
                                                            href="#kt_table_widget_5_tab_2">Completed</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4"
                                                            data-bs-toggle="tab"
                                                            href="#kt_table_widget_5_tab_3">UnCompleted</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body py-3">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                            <thead>
                                                                <tr class="border-0">
                                                                    <th class="p-0 w-50px"></th>
                                                                    <th class="p-0 min-w-50px"></th>
                                                                    <th class="p-0 min-w-170px"></th>
                                                                    <th class="p-0 min-w-110px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="allTasksTable">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade " id="kt_table_widget_5_tab_2">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                            <thead>
                                                                <tr class="border-0">
                                                                    <th class="p-0 w-50px"></th>
                                                                    <th class="p-0 min-w-150px"></th>
                                                                    <th class="p-0 min-w-140px"></th>
                                                                    <th class="p-0 min-w-110px"></th>
                                                                    <th class="p-0 min-w-50px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade " id="kt_table_widget_5_tab_3">
                                                    <div class="table-responsive">
                                                        <table
                                                            class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                            <thead>
                                                                <tr class="border-0">
                                                                    <th class="p-0 w-50px"></th>
                                                                    <th class="p-0 min-w-150px"></th>
                                                                    <th class="p-0 min-w-140px"></th>
                                                                    <th class="p-0 min-w-110px"></th>
                                                                    <th class="p-0 min-w-50px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
                    <div
                        class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2024&copy;</span>
                            <a href="#" target="_blank"
                                class="text-gray-800 text-hover-primary">Kawthar Elkis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modalTitle">Add New Task</h3>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-7">
                        <input type="text" class="form-control" id="taskTitle" placeholder="" />
                        <label for="taskTitle">Task title</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="taskDescription" style="height: 100px"></textarea>
                        <label for="taskDescription">Task description</label>
                    </div>
                    <input type="hidden" id="editTaskId" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveTask">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const saveTaskButton = document.getElementById('saveTask');
            const allTasksTable = document.getElementById('allTasksTable');
            const completedTasksTable = document.querySelector('#kt_table_widget_5_tab_2 tbody');
            const uncompletedTasksTable = document.querySelector('#kt_table_widget_5_tab_3 tbody');
            const modal = new bootstrap.Modal(document.getElementById('kt_modal_1'));
            const modalTitle = document.getElementById('modalTitle');
            const editTaskId = document.getElementById('editTaskId');

            const emptyStateSVG = `
        <tr>
            <td colspan="5" class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="200.07556" height="200.37952" viewBox="0 0 889.07556 459.37952" xmlns:xlink="http://www.w3.org/1999/xlink"><title>welcome_cats</title><ellipse cx="444.53778" cy="398.16856" rx="444.53778" ry="12.43462" fill="#e6e6e6"/><path d="M836.90729,483.74151c-.56135.0077-1.12265.0154-1.69165.0154s-1.1303-.0077-1.69164-.0154c-29.75741-.67665-51.32574-19.26925-45.83561-38.77687l13.387-47.58878,3.38328-12.04134,59.97615,1.02263,3.6447,11.77994,14.34816,46.36621C888.50213,464.11853,866.93379,483.06486,836.90729,483.74151Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M868.07949,398.13709a66.201,66.201,0,0,1-67.00413-.76123l3.38328-12.04134,59.97615,1.02263Z" transform="translate(-155.46222 -220.31024)" opacity="0.2"/><path d="M865.54813,446.54371c2.59087-9.656,11.10609-23.5853,34.98657-40.37992,41.64786-29.29427,16.80312-51.25925,15.72654-52.1796-2.25846-1.93041-1.92491-4.09793.77549-4.83852a11.22377,11.22377,0,0,1,9.03426,2.10278c1.34843,1.11541,32.45928,27.68293-14.53706,60.73417-42.29508,29.74951-33.30237,49.16914-33.1992,49.35545,1.13341,2.077-.684,3.73882-4.063,3.71644s-7.03927-1.72268-8.17623-3.7975C865.8564,460.81807,863.1348,455.53283,865.54813,446.54371Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M807.53434,490.67723a6.92019,6.92019,0,0,1-6.92032-6.92032V453.76883a6.92032,6.92032,0,0,1,13.84065,0v29.98808A6.92019,6.92019,0,0,1,807.53434,490.67723Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M813.602,419.48415a6.92019,6.92019,0,0,1-9.17934,3.39434l-27.243-12.53415a6.92033,6.92033,0,0,1,5.785-12.57368l27.243,12.53415A6.92019,6.92019,0,0,1,813.602,419.48415Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M856.82926,419.48415a6.92019,6.92019,0,0,0,9.17934,3.39434l27.243-12.53415a6.92032,6.92032,0,0,0-5.785-12.57368l-27.243,12.53415A6.9202,6.9202,0,0,0,856.82926,419.48415Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M862.89684,490.67723a6.92018,6.92018,0,0,0,6.92032-6.92032V453.76883a6.92032,6.92032,0,1,0-13.84064,0v29.98808A6.92018,6.92018,0,0,0,862.89684,490.67723Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M891.81774,296.5349a6.80558,6.80558,0,0,0,1.3735-5.40838l-3.76639-22.157-3.76639-22.157a6.913,6.913,0,0,0-11.22615-4.16441L857.127,256.9884l-10.42587,8.63951a65.69368,65.69368,0,0,0-21.04716-.31735l-10.04291-8.32216-17.30532-14.34028a6.913,6.913,0,0,0-11.22614,4.16441l-3.76639,22.157-3.76639,22.157a6.8438,6.8438,0,0,0,.30144,3.47373,66.11762,66.11762,0,1,0,111.96948,1.93465Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M796.57153,251.7278a3.447,3.447,0,0,0-1.20182.21814,3.38791,3.38791,0,0,0-2.18438,2.6353L788.618,281.45081a3.4226,3.4226,0,0,0,4.56474,3.7823l25.55323-9.47941a3.42226,3.42226,0,0,0,.99345-5.84352l-.00038-.00076-20.98549-17.38979A3.39218,3.39218,0,0,0,796.57153,251.7278Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><path d="M876.16653,251.7278a3.39218,3.39218,0,0,0-2.172.79183l-20.98587,17.39055a3.42226,3.42226,0,0,0,.99344,5.84352l25.55324,9.47941a3.4226,3.4226,0,0,0,4.56474-3.7823l-4.56737-26.86957a3.38788,3.38788,0,0,0-2.18437-2.6353A3.447,3.447,0,0,0,876.16653,251.7278Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><circle cx="679.75342" cy="119.65771" r="9.2271" fill="#e6e6e6"/><ellipse cx="679.75342" cy="115.04416" rx="6.1514" ry="2.30677" fill="#3f3d56"/><path d="M675.13987,125.04018H683.598a0,0,0,0,1,0,0v10.38049a4.22908,4.22908,0,0,1-4.22908,4.22908h0a4.22908,4.22908,0,0,1-4.22908-4.22908V125.04018a0,0,0,0,1,0,0Z" fill="#ff6584"/><path d="M835.729,240.68976c-.4435.91976-.87414,1.84948-1.27916,2.7982a65.81817,65.81817,0,0,0-4.65081,35.34384c.86574-1.25608,1.77556-2.56471,2.701-3.88776A65.775,65.775,0,0,1,835.729,240.68976Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M842.64935,249.14794c-.4435.91976-.87415,1.84947-1.27916,2.79819A65.81818,65.81818,0,0,0,836.71937,287.29c.86575-1.25607,1.77556-2.56471,2.70095-3.88775A65.775,65.775,0,0,1,842.64935,249.14794Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M863.98522,415.199l-.97489-12.39806-.97489-12.39809a3.82528,3.82528,0,0,0-5.98-2.8528l-10.24962,7.04331-7.48458,5.14325a5.09542,5.09542,0,0,0-7.74914,0l-7.48459-5.14325L812.83794,387.55a3.82528,3.82528,0,0,0-5.98,2.8528l-.97489,12.39809-.97489,12.39806a3.82528,3.82528,0,0,0,5.4606,3.75238l11.22448-5.35474,9.22263-4.39977a5.10117,5.10117,0,0,0,7.26159,0l9.22264,4.39977,11.22448,5.35474A3.82528,3.82528,0,0,0,863.98522,415.199Z" transform="translate(-155.46222 -220.31024)" fill="#6c63ff"/><circle cx="667.45062" cy="109.66168" r="2.30677" fill="#e6e6e6"/><circle cx="692.05622" cy="109.66168" r="2.30677" fill="#e6e6e6"/><path d="M388.8876,463.362c.56134.0077,1.12264.01539,1.69164.01539s1.1303-.00769,1.69164-.01539c29.75741-.67666,51.32574-19.26926,45.83561-38.77688l-13.387-47.58877L421.33624,364.955l-59.97615,1.02264-3.64469,11.77994-14.34817,46.36621C337.29275,443.739,358.86109,462.68533,388.8876,463.362Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M357.7154,377.75757a66.201,66.201,0,0,0,67.00413-.76123L421.33624,364.955l-59.97615,1.02264Z" transform="translate(-155.46222 -220.31024)" opacity="0.2"/><path d="M352.962,420.52381c-6.47349-7.6187-20.13012-16.56472-48.90033-21.5257-50.17744-8.65585-37.1209-39.13943-36.54168-40.43193,1.21524-2.71115-.01371-4.52748-2.77131-4.04135a11.22369,11.22369,0,0,0-7.26561,5.7663c-.74147,1.58513-17.492,38.90987,39.12707,48.67275,50.95721,8.79036,51.139,30.19031,51.12548,30.40285-.13567,2.36221,2.21806,3.08656,5.26252,1.62046s5.62513-4.5691,5.76494-6.93088C358.79137,433.55727,358.98968,427.61576,352.962,420.52381Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M418.26054,470.29771a6.92018,6.92018,0,0,0,6.92032-6.92033V433.38931a6.92033,6.92033,0,0,0-13.84065,0v29.98807A6.92019,6.92019,0,0,0,418.26054,470.29771Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M412.19286,399.10463a6.92019,6.92019,0,0,0,9.17934,3.39434l27.243-12.53415a6.92033,6.92033,0,1,0-5.785-12.57368l-27.243,12.53415A6.92019,6.92019,0,0,0,412.19286,399.10463Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M368.96562,399.10463a6.92019,6.92019,0,0,1-9.17934,3.39434l-27.243-12.53415a6.92033,6.92033,0,1,1,5.785-12.57368l27.243,12.53415A6.92019,6.92019,0,0,1,368.96562,399.10463Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M362.898,470.29771a6.92018,6.92018,0,0,1-6.92032-6.92033V433.38931a6.92033,6.92033,0,0,1,13.84065,0v29.98807A6.92019,6.92019,0,0,1,362.898,470.29771Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M445.94662,274.22073a6.8438,6.8438,0,0,0,.30144-3.47373l-3.76639-22.157-3.76639-22.157a6.913,6.913,0,0,0-11.22614-4.16442l-17.30532,14.34029L400.14091,244.931a65.69368,65.69368,0,0,0-21.04716.31735l-10.42587-8.63951-17.30531-14.34029a6.913,6.913,0,0,0-11.22615,4.16442L336.37,248.59l-3.76639,22.157a6.80563,6.80563,0,0,0,1.3735,5.40838,66.13684,66.13684,0,1,0,111.96948-1.93465Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M427.05136,232.14011,406.06587,249.5299l-.00038.00075a3.42226,3.42226,0,0,0,.99345,5.84353l25.55324,9.4794a3.4226,3.4226,0,0,0,4.56474-3.7823l-4.56737-26.86957a3.38792,3.38792,0,0,0-2.18438-2.63529,3.44677,3.44677,0,0,0-1.20182-.21814A3.3922,3.3922,0,0,0,427.05136,232.14011Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><path d="M348.42654,231.56642a3.38788,3.38788,0,0,0-2.18438,2.63529l-4.56737,26.86957a3.4226,3.4226,0,0,0,4.56474,3.7823l25.55324-9.4794a3.42227,3.42227,0,0,0,.99344-5.84353l-20.98587-17.39054a3.39218,3.39218,0,0,0-2.172-.79183A3.44672,3.44672,0,0,0,348.42654,231.56642Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><circle cx="235.11702" cy="99.27819" r="9.2271" fill="#e6e6e6"/><ellipse cx="235.11702" cy="94.66464" rx="6.1514" ry="2.30677" fill="#3f3d56"/><path d="M390.9637,324.9709h0A4.22908,4.22908,0,0,1,395.19279,329.2v10.38049a0,0,0,0,1,0,0h-8.45817a0,0,0,0,1,0,0V329.2A4.22908,4.22908,0,0,1,390.9637,324.9709Z" transform="translate(626.46519 444.24113) rotate(-180)" fill="#ff6584"/><path d="M390.06586,220.31024c.4435.91976.87414,1.84947,1.27916,2.79819a65.81819,65.81819,0,0,1,4.65081,35.34385c-.86574-1.25608-1.77555-2.56471-2.701-3.88776A65.775,65.775,0,0,0,390.06586,220.31024Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M383.14553,228.76841c.44351.91977.87415,1.84948,1.27917,2.7982a65.81827,65.81827,0,0,1,4.65081,35.34384c-.86574-1.25607-1.77556-2.56471-2.701-3.88776A65.77493,65.77493,0,0,0,383.14553,228.76841Z" transform="translate(-155.46222 -220.31024)" fill="#3f3d56"/><path d="M361.80966,260.25756l.97489-12.39806.97489-12.39808a3.82528,3.82528,0,0,1,5.98-2.85281l10.24962,7.04332,7.48459,5.14325a5.09539,5.09539,0,0,1,7.74913,0l7.48459-5.14325,10.24962-7.04332a3.82528,3.82528,0,0,1,5.98,2.85281l.97489,12.39808.97489,12.39806a3.82528,3.82528,0,0,1-5.46059,3.75239L404.2016,258.6552l-9.22264-4.39977a5.10114,5.10114,0,0,1-7.26159,0l-9.22264,4.39977L367.27025,264.01A3.82528,3.82528,0,0,1,361.80966,260.25756Z" transform="translate(-155.46222 -220.31024)" fill="#6c63ff"/><path d="M400.57526,309.5924c0,1.274,1.03278,0,2.30678,0s2.30677,1.274,2.30677,0a2.30678,2.30678,0,0,0-4.61355,0Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><path d="M380.58322,309.5924c0,1.274-1.03278,0-2.30678,0s-2.30677,1.274-2.30677,0a2.30678,2.30678,0,0,1,4.61355,0Z" transform="translate(-155.46222 -220.31024)" fill="#e6e6e6"/><polygon points="481.05 263.451 481.05 248.788 407.736 248.788 407.736 249.705 407.736 263.451 407.736 381.67 407.736 396.333 422.399 396.333 481.05 396.333 481.05 381.67 422.399 381.67 422.399 263.451 481.05 263.451" fill="#3f3d56"/><path d="M672.25275,469.09857V616.643h73.314V469.09857Zm58.65118,132.8816h-43.9884V483.76142h43.9884Z" transform="translate(-155.46222 -220.31024)" fill="#6c63ff"/><polygon points="313.344 381.67 313.344 249.705 298.681 249.705 298.681 381.67 298.681 396.333 313.344 396.333 371.995 396.333 371.995 381.67 313.344 381.67" fill="#6c63ff"/><polygon points="265.69 263.451 265.69 248.788 192.376 248.788 192.376 249.705 192.376 263.451 192.376 314.771 192.376 329.434 192.376 381.67 192.376 396.333 207.039 396.333 265.69 396.333 265.69 381.67 207.039 381.67 207.039 329.434 265.69 329.434 265.69 314.771 207.039 314.771 207.039 263.451 265.69 263.451" fill="#3f3d56"/><polygon points="839.372 263.451 839.372 248.788 766.058 248.788 766.058 249.705 766.058 263.451 766.058 314.771 766.058 329.434 766.058 381.67 766.058 396.333 780.721 396.333 839.372 396.333 839.372 381.67 780.721 381.67 780.721 329.434 839.372 329.434 839.372 314.771 780.721 314.771 780.721 263.451 839.372 263.451" fill="#6c63ff"/><polygon points="142.889 249.705 142.889 370.89 104.228 332.23 104.14 332.319 104.058 332.237 64.535 371.76 64.535 249.247 49.872 249.247 49.872 395.875 64.535 395.875 64.535 392.496 104.147 352.884 142.889 391.627 142.889 396.333 157.552 396.333 157.552 249.705 142.889 249.705" fill="#3f3d56"/><polygon points="717.488 249.705 717.488 253.083 677.876 292.695 639.133 253.953 639.133 249.247 624.47 249.247 624.47 395.875 639.133 395.875 639.133 274.689 677.794 313.35 677.883 313.261 677.964 313.342 717.488 273.819 717.488 396.333 732.15 396.333 732.15 249.705 717.488 249.705" fill="#3f3d56"/><circle cx="335.07556" cy="150.37952" r="9" fill="#6c63ff"/><circle cx="113.07556" cy="250.37952" r="9" fill="#6c63ff"/><circle cx="291.07556" cy="450.37952" r="9" fill="#6c63ff"/><circle cx="517.07556" cy="177.37952" r="9" fill="#6c63ff"/><circle cx="782.07556" cy="442.37952" r="9" fill="#6c63ff"/><circle cx="791.07556" cy="206.37952" r="9" fill="#6c63ff"/><circle cx="677.07556" cy="368.37952" r="9" fill="#6c63ff"/></svg>
            </td>
        </tr>
    `;

            function renderTask(task, tableElement) {
                const newRow = document.createElement('tr');
                newRow.dataset.taskId = task.id;
                newRow.innerHTML = `
            <td>
                <div class="symbol symbol-45px me-2">
                    <span class="symbol-label">
                        <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                    </span>
                </div>
            </td>
            <td>
                <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">${task.title}</a>
                <span class="text-muted fw-semibold d-block"></span>
            </td>
            <td class="text-end text-muted fw-bold">${task.description}</td>
            <td class="text-end">
                <span class="badge badge-light-${task.status === 'Completed' ? 'success' : 'warning'}">${task.status}</span>
            </td>
            <td class="text-end">
                <button class="btn btn-sm btn-light btn-active-light-primary edit-task">Edit</button>
                <button class="btn btn-sm btn-light btn-active-light-primary delete-task">Delete</button>
                <button class="btn btn-sm btn-light btn-active-light-primary toggle-status">
                    ${task.status === 'Completed' ? 'Mark Uncompleted' : 'Mark Completed'}
                </button>
            </td>
        `;
                tableElement.appendChild(newRow);

                newRow.querySelector('.delete-task').addEventListener('click', function() {
                    deleteTask(task.id);
                });

                newRow.querySelector('.toggle-status').addEventListener('click', function() {
                    toggleTaskStatus(task.id);
                });

                newRow.querySelector('.edit-task').addEventListener('click', function() {
                    openEditModal(task);
                });
            }

            function openEditModal(task) {
                modalTitle.textContent = "Edit Task";
                document.getElementById('taskTitle').value = task.title;
                document.getElementById('taskDescription').value = task.description;
                editTaskId.value = task.id;
                modal.show();
            }

            function renderTasks() {
                fetch('task_api.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'action=getTasks'
                    })
                    .then(response => response.json())
                    .then(tasks => {
                        allTasksTable.innerHTML = '';
                        completedTasksTable.innerHTML = '';
                        uncompletedTasksTable.innerHTML = '';

                        if (tasks.length === 0) {
                            allTasksTable.innerHTML = emptyStateSVG;
                        } else {
                            tasks.forEach(task => {
                                renderTask(task, allTasksTable);
                                if (task.status === 'Completed') {
                                    renderTask(task, completedTasksTable);
                                } else {
                                    renderTask(task, uncompletedTasksTable);
                                }
                            });
                        }

                        if (completedTasksTable.children.length === 0) {
                            completedTasksTable.innerHTML = emptyStateSVG;
                        }

                        if (uncompletedTasksTable.children.length === 0) {
                            uncompletedTasksTable.innerHTML = emptyStateSVG;
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            function deleteTask(taskId) {
                if (confirm('Are you sure you want to delete this task?')) {
                    fetch('task_api.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: `action=deleteTask&taskId=${taskId}`
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                renderTasks();
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }
            }

            function toggleTaskStatus(taskId) {
                fetch('task_api.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: `action=toggleStatus&taskId=${taskId}`
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            renderTasks();
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            saveTaskButton.addEventListener('click', function() {
                const title = document.getElementById('taskTitle').value;
                const description = document.getElementById('taskDescription').value;
                const taskId = editTaskId.value;

                if (title && description) {
                    const action = taskId ? 'updateTask' : 'addTask';
                    const body = taskId ?
                        `action=${action}&taskId=${taskId}&title=${encodeURIComponent(title)}&description=${encodeURIComponent(description)}` :
                        `action=${action}&title=${encodeURIComponent(title)}&description=${encodeURIComponent(description)}`;

                    fetch('task_api.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            },
                            body: body
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success || data.id) {
                                renderTasks();
                                document.getElementById('taskTitle').value = '';
                                document.getElementById('taskDescription').value = '';
                                editTaskId.value = '';
                                modal.hide();
                            }
                        })
                        .catch(error => console.error('Error:', error));
                } else {
                    alert('Please fill in both title and description');
                }
            });

            renderTasks();
        });
    </script>
</body>


</html>