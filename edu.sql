/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : edu

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-04-20 17:09:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '用户名',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密码',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '性别:1-男,2-女,3-未知',
  `mobile` char(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '手机号',
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '邮箱',
  `role_id` tinyint(3) unsigned NOT NULL COMMENT '角色ID',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新于',
  `state` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '用户状态:0-禁用,1-启动',
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '记住密码TOKEN',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'test', '$2y$10$SZ50r80SEK4zMaHVkODqVupVLufzQuZQ4lHBm46QDsGwY5yeXL3lK', '3', '15311682812', 'placeat_porro@sohu.com', '1', '1515464653', '1515464653', '1', '5M0frKO37TihP57FcdfBoRNQIBRIGudqXNZywj93ziKxQ1mnwbcE0LHwXBlw');
INSERT INTO `admin` VALUES ('2', '@php12', '$2y$10$SZ50r80SEK4zMaHVkODqVupVLufzQuZQ4lHBm46QDsGwY5yeXL3lK', '1', '18888888888', '8@itcast.cn', '2', '1515464653', '1515464653', '1', '');
INSERT INTO `admin` VALUES ('3', 'lconsequuntur', '$2y$10$XcA4e3joS3miJqoNwtYpA.cXgXWzAyesBb6EAPpKe2lsKv0.KJDau', '2', '15579979365', 'quod87@yahoo.com', '105', '1515464653', '1515464653', '0', '');
INSERT INTO `admin` VALUES ('4', 'mquam', '$2y$10$0.XsR1q4trpBhSEmASfRBO1ASMKIOhrhn91I70jZHNu95wdGh9kBW', '3', '18437360817', 'perferendis41@yahoo.com', '86', '1515464653', '1515464653', '1', '');
INSERT INTO `admin` VALUES ('5', 'facere_reiciendis', '$2y$10$Eqm3/lbZJM/SLMHwQmmJKebBcHtaro4.5BXVKitNrzjTsztgq/8vS', '2', '17195905254', 'mvitae@qq.com', '18', '1515464653', '1515464653', '1', '');
INSERT INTO `admin` VALUES ('6', 'sed.quis', '$2y$10$KiznxOwAEYmB9DyfuEk84u7YrpdDUvzaAnFlG0ik9wg.Evc0IgEOq', '3', '15033302760', 'enim29@yahoo.com', '120', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('7', 'vquia', '$2y$10$THC7ROAS62/dmoccpH2b9.I7QWM0bcncrdMiVYaFuM0pf9SAYmLmu', '1', '13981198314', 'quibusdam.possimus@sina.com', '5', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('8', 'culpa86', '$2y$10$to7K3sqmK0bthsKi6U1eB.w34MRFvCy2Sos.XxsWUOaj1i7fMLpXi', '3', '13476095830', 'neque_quidem@163.com', '141', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('9', 'quibusdam_est', '$2y$10$k5LLVd5utF3Ou4GFAwLShewtp7g0kT8uUw4Z7cPwCNpq/9JFQSjFe', '2', '17004596676', 'aperiam.rerum@sohu.com', '108', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('10', 'est.aut', '$2y$10$vkKIY9bGeUUdIVm24IWw4Oz.HTIjR/L81sq78Gs7CCfUGLTygCOOi', '1', '18556661215', 'rerum.fugiat@126.com', '64', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('11', '测试1', '$2y$10$26LX4pcFLCWAnH9xHC.Iaue4hRO3SE0U/0Mtt8bLF0lI4dFKYTira', '1', '18026047131', 'rerum44@sohu.com', '59', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('12', '测试2', '$2y$10$dz4YZ/hJqJhOA./Et9z/MuTW44vfNSnkiXTELLjKTCeG7sFO2Y0u2', '2', '18467984284', 'nobis_nihil@gmail.com', '73', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('13', 'aspernatur.et', '$2y$10$icJUYIOsF70Xw4L52D.kwufE7oeowqzqaKIbrnfBwLYfmxOw0CGW.', '2', '17183881439', 'itotam@163.com', '9', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('14', 'explicabo71', '$2y$10$R8S2QdggmtnaMoahXivZFuXGdhprQ88p4KJ93mwSaEYkZhML.nMyG', '3', '18411466140', 'eos_ut@hotmail.com', '119', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('15', 'quasi_tempora', '$2y$10$IRy5oncxDgcZ597iu8PtA.mV6h22ZFbH6duv8YV1ZMdGbinhrDTKO', '3', '17089325133', 'repellat.quae@hotmail.com', '145', '1515464654', '1515464654', '1', '');
INSERT INTO `admin` VALUES ('16', 'voluptatum_corporis', '$2y$10$xK3/5R.HjnmnbQPo7j7tnO6k1BvZn3ztxLLs0ZavjBJz.SLAjB.Xm', '1', '17181320033', 'unde_quo@126.com', '7', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('17', 'dolorem82', '$2y$10$EctApRb4HZ6P5jlcPMhdpuGyAY0bSiVYeIXhWJKLEl9lELoMVCJpi', '3', '15303141945', 'similique.quis@163.com', '97', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('18', 'est_est', '$2y$10$9076Mez2wrGizKzQ13i71u3q9GMM3lD395o6O1QGR6i1dVpBQWEES', '2', '15636911544', 'voluptatem.explicabo@sina.com', '123', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('19', 'tempore.non', '$2y$10$uvZDAp5Q6g9CTHn4DLqMe.DwBHX5y7Hx4gVo/zhko9h7Iw69TPE.q', '2', '18476628487', 'iadipisci@sina.com', '12', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('20', 'sequi_quae', '$2y$10$/O9LZymRh3NHVZMcXi6Tr.m65MmMf3rC5gkJDGHJUtRhTx4SC9KH.', '1', '13914922297', 'qui.molestias@qq.com', '108', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('21', 'odit11', '$2y$10$LpQXCkuOgy2VzxZY8P6dLul.hMGhkpCpLvwPtB2/LYKtn1PTGe4jy', '1', '18524504501', 'optio_voluptate@yahoo.com', '82', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('22', 'quia.perspiciatis', '$2y$10$QQB46LM9AtdqHy30cwWiTO/myFCbnWCq2qn2SOnk.qhgZEBWgvgAC', '3', '18912186371', 'qdelectus@yahoo.com', '36', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('23', 'expedita_ducimus', '$2y$10$UKZMuD5/XTXd95ktEY5Aiee1HiSBtmCcNtntZgYljF7X/YoyaCPG6', '1', '13737956993', 'libero_ea@163.com', '145', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('24', 'et_voluptatibus', '$2y$10$.9JBABmc8g/YZs6yIvi/d.ZWuzGI9il/D7Zzk95C5SufakdYtzmbi', '2', '14763134905', 'voluptates.libero@hotmail.com', '15', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('25', 'maiores_qui', '$2y$10$fq3dG88CYHSNwlQM1moyXOa.NJj8P24ePSs6HdX8ChX27I1XzBkH6', '1', '17018577884', 'nquidem@163.com', '150', '1515464655', '1515464655', '1', '');
INSERT INTO `admin` VALUES ('26', 'quo_veritatis', '$2y$10$maXwurRldUMYSzsu3dZG8.oiK3Bjo11EHqe1Gpa3ZvrsTd6xrLaYK', '3', '15865800932', 'sed.et@126.com', '94', '1515464656', '1515464656', '1', '');
INSERT INTO `admin` VALUES ('27', 'dolorem43', '$2y$10$sLSKSYzlHQWJFcJDzBF52.uAz2xB1MAEgI7M.xZ5egNBKNRStvhnS', '1', '18595328561', 'sequi04@qq.com', '9', '1515464656', '1515464656', '1', '');
INSERT INTO `admin` VALUES ('28', 'hmagni', '$2y$10$pTIDJ80TPmDPSZT6WxynVu5c5Dadc8HszWz99r0Wq/z7KcfK.RuRi', '1', '17122853380', 'det@gmail.com', '86', '1515464656', '1515464656', '1', '');
INSERT INTO `admin` VALUES ('29', 'itaque_suscipit', '$2y$10$Q7pGP3hQ7oesrwxZFPDw8uoi01emewPgJRPXm/.hC1AQJy.r6CjPm', '3', '18625827967', 'et_id@sohu.com', '71', '1515464656', '1515464656', '1', '');

-- ----------------------------
-- Table structure for `auth`
-- ----------------------------
DROP TABLE IF EXISTS `auth`;
CREATE TABLE `auth` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '权限名称',
  `controller` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '控制器名',
  `action` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '方法名',
  `pid` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '等级:0-顶级,其他-子级（最多2级）',
  `is_nav` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否菜单显示:1-是,0-否',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of auth
-- ----------------------------
INSERT INTO `auth` VALUES ('16', '管理员管理', 'AdminController', '', '0', '1', '0', '0');
INSERT INTO `auth` VALUES ('17', '管理员列表', 'AdminController', 'index', '16', '1', '0', '0');
INSERT INTO `auth` VALUES ('18', '角色管理', 'RoleController', '', '0', '1', '0', '0');
INSERT INTO `auth` VALUES ('19', '角色列表', 'RoleController', 'index', '18', '1', '0', '0');
INSERT INTO `auth` VALUES ('20', '分配权限', 'RoleController', 'assignAuth', '18', '1', '0', '0');
INSERT INTO `auth` VALUES ('21', '权限管理', 'AuthController', '', '0', '1', '0', '0');
INSERT INTO `auth` VALUES ('22', '权限列表', 'AuthController', 'index', '21', '1', '0', '0');
INSERT INTO `auth` VALUES ('23', '权限添加', 'AuthController', 'add', '21', '1', '0', '0');
INSERT INTO `auth` VALUES ('24', '专业分类管理', 'ProtypeController', '', '0', '1', '0', '0');
INSERT INTO `auth` VALUES ('25', '专业分类列表', 'ProtypeController', 'index', '24', '1', '0', '0');
INSERT INTO `auth` VALUES ('26', '专业管理', 'ProfessionController', '', '0', '1', '0', '0');
INSERT INTO `auth` VALUES ('27', '专业列表', 'ProfessionController', 'index', '26', '1', '0', '0');
INSERT INTO `auth` VALUES ('28', '课程管理', 'CourseController', '', '0', '1', '0', '0');
INSERT INTO `auth` VALUES ('29', '课程列表', 'CourseController', 'index', '28', '1', '0', '0');
INSERT INTO `auth` VALUES ('30', '课程添加', 'CourseController', 'add', '28', '1', '0', '0');
INSERT INTO `auth` VALUES ('31', '课时管理', 'LessonController', '', '0', '1', '0', '0');
INSERT INTO `auth` VALUES ('32', '课时列表', 'LessonController', 'index', '31', '1', '0', '0');

-- ----------------------------
-- Table structure for `course`
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '课程名称',
  `profession_id` int(11) NOT NULL COMMENT '课程所属专业的id',
  `course_price` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '课程的价格',
  `img` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '封面图',
  `course_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '课程描述',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', 'PHP核心编程', '1', '12.34', '', '非常经典的课程', '0', '0');
INSERT INTO `course` VALUES ('2', 'LInux环境安装', '2', '4512.34', '', '非常经典的课程', '0', '0');
INSERT INTO `course` VALUES ('3', 'PHP文件上传', '3', '6712.34', '', '非常经典的课程', '0', '0');

-- ----------------------------
-- Table structure for `lesson`
-- ----------------------------
DROP TABLE IF EXISTS `lesson`;
CREATE TABLE `lesson` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL COMMENT '课时所属课程的id',
  `img` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '封面图',
  `lesson_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '课时名称',
  `video_address` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '视频的地址',
  `video_time` int(11) NOT NULL DEFAULT '10' COMMENT '课时的时长',
  `teacher_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '讲师名称',
  `lesson_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '课时描述',
  `state` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态:0停用1开启',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of lesson
-- ----------------------------
INSERT INTO `lesson` VALUES ('1', '1', '', 'PHP文件上传', '', '20', '李白', '非常经典的课程', '1', '0', '0');
INSERT INTO `lesson` VALUES ('2', '2', '', 'PHP数组', '', '30', '刘备', '非常经典的课程', '1', '0', '0');
INSERT INTO `lesson` VALUES ('3', '1', '', 'ajax的前生今世', '', '10', '曹操', '非常经典的课程', '1', '0', '0');
INSERT INTO `lesson` VALUES ('4', '1', '', 'linux的环境安装', '', '15', '李逵', '非常经典的课程', '1', '0', '0');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2018_01_09_093439_create_admin_table', '1');
INSERT INTO `migrations` VALUES ('2', '2018_01_11_145019_create_role_table', '2');
INSERT INTO `migrations` VALUES ('3', '2018_01_11_145552_create_auth_table', '3');
INSERT INTO `migrations` VALUES ('4', '2018_01_12_103150_create_kecheng_table', '4');
INSERT INTO `migrations` VALUES ('5', '2018_01_14_152649_create_stream_table', '5');

-- ----------------------------
-- Table structure for `profession`
-- ----------------------------
DROP TABLE IF EXISTS `profession`;
CREATE TABLE `profession` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profession_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '专业名称',
  `protype_id` tinyint(3) unsigned NOT NULL COMMENT '专业分类表的主键',
  `img` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '封面图',
  `profession_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '描述',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of profession
-- ----------------------------
INSERT INTO `profession` VALUES ('1', 'PHP学科', '1', '', '是世界上最好的语言', '0', '0');
INSERT INTO `profession` VALUES ('2', 'HTML5&全栈', '2', '', '是世界上最好的语言', '0', '0');
INSERT INTO `profession` VALUES ('3', 'Python全栈', '3', '', '是世界上最好的语言', '0', '0');

-- ----------------------------
-- Table structure for `protype`
-- ----------------------------
DROP TABLE IF EXISTS `protype`;
CREATE TABLE `protype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `protype_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分类名',
  `sort` tinyint(4) NOT NULL DEFAULT '0',
  `state` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态:0停用1开启',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of protype
-- ----------------------------
INSERT INTO `protype` VALUES ('1', '后端', '0', '1', '0', '0');
INSERT INTO `protype` VALUES ('2', 'web开发', '0', '1', '0', '0');
INSERT INTO `protype` VALUES ('3', '运维', '0', '1', '0', '0');
INSERT INTO `protype` VALUES ('4', '数据库', '0', '1', '0', '0');
INSERT INTO `protype` VALUES ('5', '大数据', '0', '1', '0', '0');

-- ----------------------------
-- Table structure for `role`
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '角色名称',
  `auth_ids` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '权限表ID集合,如:1,2,3',
  `auth_ac` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '权限表对应控制器方法集合,如:admincontroller@index,indexcontroller@index',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', '超级管理员', '16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32', 'AdminController@,AdminController@index,RoleController@,RoleController@index,RoleController@assignAuth,AuthController@,AuthController@index,AuthController@add,ProtypeController@,ProtypeController@index,ProfessionController@,ProfessionController@index,CourseController@,CourseController@index,CourseController@add,LessonController@,LessonController@index', '1515464653', '1515748663');
INSERT INTO `role` VALUES ('2', '网站编辑', '28,29,30,31,32', 'CourseController@,CourseController@index,CourseController@add,LessonController@,LessonController@index', '1515464653', '1515748690');
INSERT INTO `role` VALUES ('3', '水电费', '16,17', 'AdminController@,AdminController@index', '1515464653', '1515721987');

-- ----------------------------
-- Table structure for `stream`
-- ----------------------------
DROP TABLE IF EXISTS `stream`;
CREATE TABLE `stream` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stream_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '直播流名称',
  `state` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '直播流状态:1-正常,2-永久禁播,3-限时禁播',
  `created_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建于',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of stream
-- ----------------------------
