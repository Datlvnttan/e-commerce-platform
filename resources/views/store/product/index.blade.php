@extends('layouts.layout_store')
@section('content')
<link rel="stylesheet" href="{{asset('css/library/tabcustom2.css')}}">
    <style>
        .brd-right {
            padding: 10px;
            min-height: 50px;
        }
        .tab-panee .row {
            position: relative;
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        .item-product-link{
            text-decoration: none;
            color: black;
        }
        .item-product-link:hover{
            color: rgb(255, 187, 0);
        }
        .item-operation{                                    
            cursor: pointer;
            font-size: 20px;
            display: block;
            width: 50px;
            margin-top:-11px;                       
        }
        .operation-center{
            position: relative;            
        }
        .operation-option{
            position: relative;
            display: none;
        }        
        .operation-btn{
            margin-bottom:5px;
            width: 50px;
            padding: 2px; 
        }
        .td-click{
            cursor: pointer;
        }
        .tr-product.not-details .td-click{
            cursor: auto;
        }
        .td-item-size,
        .td-item-classify{
            float: left;
            text-align: left;                        
        }
        .td-box-quantity-classify{
            display: block;
        }
        .td-box-quantity-size{            
            margin-left:5px; 
            padding-bottom:2px; 
            border-left:1px solid #AAAAAA;              
            border-bottom:1px solid #AAAAAA;  
            border-bottom-left-radius:5px;             
        }
        .td-item-quantity{
            color: #7a7a7a
        }
        .td-quantity-details{
            display: none;            
        }
    </style>
        <div >
            <hr />
            <div class="item" style="padding:20px; min-height:800px;">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="/cua-hang/san-pham/them-san-pham" class="btn btn-outline-warning">
                            <svg style="margin-top:-5px!important; position:relative" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square-dotted" viewBox="0 0 16 16">
                                <path d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0H2.5zm2.292 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zm1.833 0h-.916v1h.916V0zm1.834 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0zm2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1V2.5zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 5.708v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 7.542v.916h1v-.916H0zm15 .916h1v-.916h-1v.916zM0 9.375v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .916v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458H0zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487zM.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029l-.194.981zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1h.458zm-9.625 0h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zm1.834-1v1h.916v-1h-.916zm1.833 1h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg>
                            Thêm sản phẩm
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="row" style="position:relative;">
                                <div class="col-11">
                                    <input class="form-control me-2 " name="txt_search" type="search" placeholder="Nhập sản phẩm bạn muốn tìm kiếm" aria-label="Search">
                                </div>
                                <div class="col-1">
                                    <button style="margin-left:-23px; position:relative;" class="btn h-100 btn-outline-info" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                                                
                    <div>
                        <div class="tabss row w-100">
                            <div class="tab-itemm activee col-lg-2 col-3">
                                <i class="tab-icon fas fa-code"></i>
                                Tất cả
                            </div>
                            <div class="tab-itemm col-lg-2 col-3">
                                <i class="tab-icon fas fa-cog"></i>
                                Đang hoạt động
                            </div>
                            <div class="tab-itemm col-lg-2 col-3">
                                <i class="tab-icon fas fa-plus-circle"></i>
                                Hết hàng
                            </div>
                            <div class="tab-itemm col-lg-1 col-3">
                                <i class="tab-icon fas fa-pen-nib"></i>
                                Đã ẩn
                            </div>
                            <div class="line"></div>
                        </div>
                        <div class="w-100" style="border-bottom:1px solid #AAAAAA"></div>
                    </div>                    
                    <div class="tab-contentt w-100">
                        <div class="tab-panee activee" id="box-show-product-all">   
                                                            
                        </div>
    
                        <div class="tab-panee ">

                        </div>
                        <div class="tab-panee ">                            
                                                           
                        </div>
                        <div class="tab-panee ">                            
                                                           
                        </div>
                    </div>                
            </div>
    
    
        </div>
<script src="{{asset('js/call_api/store_product.js')}}"></script>
<script>GetProductForStore()</script> 
<script type="text/javascript" src="{{asset('js/library/tabcustom1.js')}}"></script>
@endsection