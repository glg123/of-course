@extends('dashboard.layouts.master')
@section('css')
@endsection
@section('sidebar')
    @include('dashboard.incudes.back.operation_sidebar')
@endsection


@section('content')
    @include('dashboard.layouts.header', ['HEADER_TYPE' => 'OPERATION'])
    @include('dashboard.incudes.alert')


    <div class="page-content" id="op-plans-add-pack">

        <div class="page-card container p-4">
            <h1 class="page-main-title mb-4"> تعديل  خطة </h1>

            <form action="{{route('package.updateVarients',$varient->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12  p-0 py-3 row">
                    
                        <div class="col-12">
                            <!-- Tabs Content -->
                            
                                <!-- third Tab -->
                                    <div class="form-header">
                                        <img class="img-fluid" src="{{asset('back/assets/images/ofCourse-images/shape-1.png')}}"
                                        width="10px" height="10px">
                                        <h6 class="form-main-title"> إضافة أيــام التقويــم </h6>
                                        <div class="form-header-line"></div>
                                    </div>
                                    <input type="hidden" name="package_id" value="{{$varient->package_id}}">
                                    <div class="form-content container">
                                        <div class="row align-items-end">
                                            <div class="col-lg-6 mb-5">
                                                <div>
                                                    <label class="form-label">اسم الخطة ( باللغة العربية )</label>
                                                    <input name="package_varients[name][ar]" value="{{$varient->getTranslation('name','ar')}}" required
                                                        class="form-control" type="text"
                                                        placeholder="اسم الخطة ( باللغة العربية ) ">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-5">
                                                <div>
                                                    <label class="form-label">اسم الخطة ( باللغة الإنجليزية ) </label>
                                                    <input class="form-control" type="text"
                                                        name="package_varients[name][en]" required value="{{$varient->getTranslation('name','en')}}"
                                                        placeholder="اسم الخطة ( باللغة الإنجليزية )">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-5">
                                                <div>
                                                    <label class="form-label">عدد الأيام المتاحة</label>
                                                    <input class="form-control" max="30"
                                                        placeholder="عدد الأيام المتاحة"
                                                        name="package_varients[days_available]" required value="{{$varient->days_available}}"
                                                        type="number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-5">
                                                <div>
                                                    <label class="form-label"> السعر</label>
                                                    <input class="form-control" placeholder=" السعر" value="{{$varient->price}}"
                                                        name="package_varients[price]" required type="number">
                                                </div>
                                            </div>
                                            @php
                                                $varientDays = $varient->days ?? [];
                                            @endphp
                                            <div class="col-lg-12 mb-5">
                                                <div>
                                                    <label class="form-label">حدد الأيــام المتاحة</label>
                                                    <div class="d-flex justify-content-between flex-wrap">


                                                        <div class="form-check form-check-right">
                                                            <input class="form-check-input category-checked"
                                                                type="checkbox" id="formCheckRight2" value="saturday" {{isset($varientDays['saturday']) ? 'checked' : ''}}>
                                                            <label class="form-check-label" for="formCheckRight2">
                                                                السبت
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-right">
                                                            <input class="form-check-input category-checked"
                                                                type="checkbox" id="formCheckRight2" value="sunday" {{isset($varientDays['sunday']) ? 'checked' : ''}}>
                                                            <label class="form-check-label" for="formCheckRight2">
                                                                الأحد
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-right">
                                                            <input class="form-check-input category-checked"
                                                                type="checkbox" id="formCheckRight2" value="monday" {{isset($varientDays['monday']) ? 'checked' : ''}}>
                                                            <label class="form-check-label" for="formCheckRight2">
                                                                الإثنين
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-right">
                                                            <input class="form-check-input category-checked"
                                                                value="tuesday" type="checkbox" id="formCheckRight2" {{isset($varientDays['tuesday']) ? 'checked' : ''}}>
                                                            <label class="form-check-label" for="formCheckRight2">
                                                                الثلاثاء
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-right">
                                                            <input class="form-check-input category-checked"
                                                                type="checkbox" id="formCheckRight2" value="wednesday" {{isset($varientDays['wednesday']) ? 'checked' : ''}}>
                                                            <label class="form-check-label" for="formCheckRight2">
                                                                الأربعاء
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-right">
                                                            <input class="form-check-input category-checked"
                                                                type="checkbox" id="formCheckRight2" value="thursday" {{isset($varientDays['thursday']) ? 'checked' : ''}}
                                                                >
                                                            <label class="form-check-label" for="formCheckRight2">
                                                                الخميس
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-right">
                                                            <input class="form-check-input category-checked" value="friday" {{isset($varientDays['friday']) ? 'checked' : ''}}
                                                                type="checkbox" id="formCheckRight2">
                                                            <label class="form-check-label" for="formCheckRight2">
                                                                الجمعة
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="col-12 days-choises-add">
                                                <ul class="nav nav-tabs ul-days-choises" id="myTab" role="tablist">
                                                    
                                                    @foreach ($varientDays as $varientDay => $varientCat)
                                                    <li class="nav-item {{$varientDay}}-choise-content" role="presentation">
                                                        <button class="nav-link " id="{{$varientDay}}-tab"
                                                            data-bs-toggle="tab" data-bs-target="#{{$varientDay}}" type="button"
                                                            role="tab" aria-controls="{{$varientDay}}"
                                                            aria-selected="true">{{$varientDay}}</button>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                                <div class="tab-content tab-days-choises " id="myTabContent" style="padding: 20px 0">
                                                    @foreach ($varientDays as $varientDay => $varientDayDetails)
                                                            <div class="tab-pane   {{$varientDay}}-choise-content" id="{{$varientDay}}" role="tabpanel"
                                                                aria-labelledby="{{$varientDay}}-tab">
                                                                <div class="row">
                                                                    @foreach ($varientDayDetails as $key =>  $varientCat)
                                                                        <div class="form-header">
                                                                            <img class="img-fluid" src="{{asset('back/assets/images/ofCourse-images/shape-1.png')}}"
                                                                                width="10px" height="10px">
                                                                            <h6 class="form-main-title"> {{$key .' '.$varientDay}} </h6>
                                                                            <div class="form-header-line"></div>
                                                                        </div>
                                                                        @foreach ($mealCategories as $mealCat)
                                                                            <div class="col-5">
                                                                                <div>
                                                                                    <label class="form-label">
                                                                                        {{ $mealCat->name }}</label>
                                                                                    <input class="form-control"
                                                                                        placeholder="عدد المرات"
                                                                                        name="package_varients[days][{{$varientDay}}][{{$key}}][{{ $mealCat->id }}]"
                                                                                        value="{{@$varientCat[$mealCat->id]['times'] ?? 0}}" type="number">
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                    @endforeach

                                                </div>

                                            </div>
                                      

                                            <div class="col-lg-12 text-start mt-3">

                                           
                                                <button type="submit"
                                                    class="btn btn-light waves-effect waves-light form-btn px-5"> تأكيد
                                                    تعديل الخطه </button>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- End Page-content -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.category-checked').on('click', function() {
                $value = $(this).val();
                if ($(this).is(':checked')) {
                    $(".ul-days-choises").append(
                        "<li class='nav-item " + $value +"-choise-content' role='presentation'><button class='nav-link' id='" + $value +
                        "-tab' data-bs-toggle='tab' data-bs-target='#" + $value +
                        "' type='button' role='tab' aria-controls='" + $value +
                        "' aria-selected='true'> " + $value + " </button> </li>"
                    );
                    $(".tab-days-choises").append(
                        "<div class='tab-pane fade "+$value+"-choise-content' id='"+$value+"' role='tabpanel' aria-labelledby='home-tab' ><div class='row'> @foreach (['first','second','third','fourth'] as $indexDay) <div class='form-header'> <img class='img-fluid' src='{{asset('back/assets/images/ofCourse-images/shape-1.png')}}' width='10px' height='10px'> <h6 class='form-main-title'> {{$indexDay}} "+$value+" </h6><div class='form-header-line'></div> </div> @foreach ($mealCategories as $mealCat)<div class='col-5'> <div> <label class='form-label'> {{ $mealCat->name }} </label> <input class='form-control' placeholder='عدد المرات' name='package_varients[days]["+$value+"][{{$indexDay}}][{{ $mealCat->id }}]'value='0' type='number'> </div> </div> @endforeach @endforeach </div> </div>"
                    );
                } else {
                    $("." + $value + "-choise-content").remove();
                }
            
            });
        });
    </script>
@endsection
