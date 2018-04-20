<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="{{ asset('admin/lib') }}/html5shiv.js"></script>
<script type="text/javascript" src="{{ asset('admin/lib') }}/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/static') }}/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/static') }}/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/lib') }}/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/static') }}/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/static') }}/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="{{ asset('admin/lib') }}/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>课时管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 管理员管理 <span class="c-gray en">&gt;</span> 课时管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form class="Huiform" method="post" action="" target="_self">
			<input type="text" class="input-text" style="width:250px" placeholder="课时名称" id="" name="">
			<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜课时节点</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_permission_add('添加课时节点','admin-permission-add.html','','310')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加课时节点</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="12">课时节点</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="40">封面图</th>
				<th>所属课程</th>
				<th>课时名称</th>
				<th>预览视频</th>
				<th>播放时间/s</th>
				<th>讲师</th>
				<th>状态</th>
				<th>创建于</th>
				<th>更新于</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<!-- <tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td>1</td>
				<td>栏目添加</td>
				<td></td>
				<td><a title="编辑" href="javascript:;" onclick="admin_permission_edit('角色编辑','admin-permission-add.html','1','','310')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_permission_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr> -->
		</tbody>
	</table>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="{{ asset('admin/lib') }}/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="{{ asset('admin/lib') }}/layer/2.4/layer.js"></script>
<script type="text/javascript" src="{{ asset('admin/static') }}/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="{{ asset('admin/static') }}/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="{{ asset('admin/lib') }}/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript">
//客户端分页大DD  服务端分页小DD
var table  = $('table').dataTable({
	//开启服务端分页（注：开启后发送的HTTP请求会携带起始位置和每页显示条数等信息）
	"serverSide": true,
	ajax: {
		url: "{{ url('admin/lesson/index') }}",
		"type": "post",
		'headers': { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
		"data": function (data) {
		}
	},
	//作用：设置服务端返回数据填充规则
	//语法：{"data": "键"，"defaultContent": "默认值"}
	"columns": [
		{ "data": "tmp1",  defaultContent: "占位，复选框" },
		{ "data": "id" },
		{ "data": "img" },
		// { "data": "course_id" },
		{ "data": "course.course_name" },
		{ "data": "lesson_name" },
		{ "data": "tmp3",  defaultContent: "占位，播放按钮" },
		{ "data": "video_time" },
		{ "data": "teacher_name" },
		{ "data": "state" },
		{ "data": "created_at" },
		{ "data": "updated_at" },
		{ "data": "tmp2", defaultContent: "占位，操作" },
	],
	//createdRow
	//作用：创建tr时回调
	//row:创建好的tr的dom对象
	//data:数据源，代表服务器端返回的每条记录的实体信息
	//dataIndex:数据源的索引号码
	"createdRow": function(row, data, dataIndex) {
		//匹配每一行的第一列
		$(row).find("td:first").html("<input type='checkbox' name='choose[]' value='"+data.id+"' />")
        //匹配每一行的第二列
        if (data.img) {
            $(row).find("td:eq(2)").html('<img src='+data.img+' width="120" height="60">');
        } else {
            var defaultImg = "{{ asset('img/default.png') }}";
            $(row).find("td:eq(2)").html('<img src="'+defaultImg+'" width="120" height="60">');
        }
        //预览播放按钮
        var playurl = "{{ url('admin/lesson/play') }}?video=" + data.video_address;
        $(row).find("td:eq(5)").html('<a href="javascript:;" onclick=video_play("'+data.lesson_name+'预览","'+playurl+'",800,450) class="btn btn-primary radius"><i class="Hui-iconfont">&#xe6e6;</i>播放</a>');
        if (data.state == 1) {
			$(row).find("td:eq(8)").html('<span class="label label-success radius">已启用</span>');
		} else {
			$(row).find("td:eq(8)").html('<span class="label radius">已停用</span>');
		}
		//匹配每一行的最后一列
		var lastHtml = '<a style="text-decoration:none" onClick="admin_start(this,10001)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a> <a title="编辑" href="javascript:;" onclick="admin_edit(\'管理员编辑\',\'admin-add.html\',2,800,500)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_del(this,1)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>';
		$(row).find("td:last").html(lastHtml);
        //让每一行居中
        $(row).addClass('text-c');
	},
	searching : false, 		 //禁用搜索
	bLengthChange: false,    //去掉每页显示多少条数据方法
    iDisplayLength:6,	 	 //限制每页显示条数
});
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-课时-添加*/
function admin_permission_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-课时-编辑*/
function admin_permission_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-课时-播放*/
function video_play(title,url,w,h){
	layer_show(title,url,w,h);
}

/*管理员-课时-删除*/
function admin_permission_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
</script>
</body>
</html>