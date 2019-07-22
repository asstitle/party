/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : party

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-07-22 21:23:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `g_answers`
-- ----------------------------
DROP TABLE IF EXISTS `g_answers`;
CREATE TABLE `g_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q_id` int(11) NOT NULL DEFAULT '0' COMMENT '问题id',
  `answer` varchar(80) NOT NULL COMMENT '答案',
  `is_answer` char(1) NOT NULL DEFAULT '0' COMMENT '1是正确答案，0不是正确答案',
  PRIMARY KEY (`id`),
  KEY `q_id` (`q_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of g_answers
-- ----------------------------
INSERT INTO `g_answers` VALUES ('4', '2', '第三方第四方', '0');
INSERT INTO `g_answers` VALUES ('5', '2', '新东方但是', '0');
INSERT INTO `g_answers` VALUES ('6', '2', '蓄电池的vdsf', '0');
INSERT INTO `g_answers` VALUES ('17', '2', '多的', '0');
INSERT INTO `g_answers` VALUES ('18', '2', 'vcfcc', '1');
INSERT INTO `g_answers` VALUES ('19', '6', '吊死扶伤d', '0');
INSERT INTO `g_answers` VALUES ('20', '6', ' 吊死扶伤是的', '0');
INSERT INTO `g_answers` VALUES ('21', '6', '吊死扶伤', '0');
INSERT INTO `g_answers` VALUES ('22', '6', '33333', '1');

-- ----------------------------
-- Table structure for `g_cat_name`
-- ----------------------------
DROP TABLE IF EXISTS `g_cat_name`;
CREATE TABLE `g_cat_name` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父菜单id',
  `list_order` float NOT NULL DEFAULT '0' COMMENT '排序',
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '菜单名称',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COMMENT='后台菜单表';

-- ----------------------------
-- Records of g_cat_name
-- ----------------------------
INSERT INTO `g_cat_name` VALUES ('1', '0', '0', '“两优一先”专题片1');
INSERT INTO `g_cat_name` VALUES ('2', '1', '10', '先进基层党组织111');
INSERT INTO `g_cat_name` VALUES ('3', '1', '10', '优秀党务工作者');
INSERT INTO `g_cat_name` VALUES ('6', '5', '0', '学习党章党规');
INSERT INTO `g_cat_name` VALUES ('7', '0', '0', 'sddduuu');
INSERT INTO `g_cat_name` VALUES ('8', '0', '0', 'saddsss');
INSERT INTO `g_cat_name` VALUES ('9', '0', '0', '水电费第三方嘻嘻嘻');
INSERT INTO `g_cat_name` VALUES ('10', '1', '0', '的范德萨发');

-- ----------------------------
-- Table structure for `g_course`
-- ----------------------------
DROP TABLE IF EXISTS `g_course`;
CREATE TABLE `g_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '课程内容',
  `kid` int(11) NOT NULL DEFAULT '0' COMMENT '课程id',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `kid` (`kid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of g_course
-- ----------------------------
INSERT INTO `g_course` VALUES ('9', '', '', '0', '1563677692');
INSERT INTO `g_course` VALUES ('10', '', '', '0', '1563677693');
INSERT INTO `g_course` VALUES ('11', '', '', '0', '1563677693');
INSERT INTO `g_course` VALUES ('12', '', '', '0', '1563677694');
INSERT INTO `g_course` VALUES ('13', '', '', '0', '1563677694');
INSERT INTO `g_course` VALUES ('14', '', '', '0', '1563677694');
INSERT INTO `g_course` VALUES ('18', '第三方师傅都是啥地方', '&lt;p&gt;水电费第三方&lt;/p&gt;', '5', '1563693214');

-- ----------------------------
-- Table structure for `g_curriculums`
-- ----------------------------
DROP TABLE IF EXISTS `g_curriculums`;
CREATE TABLE `g_curriculums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL DEFAULT '0' COMMENT '分类父ID',
  `p_next_id` int(11) NOT NULL DEFAULT '0' COMMENT '二级分类id',
  `curriculum_name` varchar(60) NOT NULL COMMENT '课程名称',
  `curriculum_intro` text NOT NULL COMMENT '课程简介',
  `curriculum_score` varchar(30) NOT NULL COMMENT '课程分数',
  `curriculum_min` varchar(30) NOT NULL COMMENT '课程学习时间',
  `pic` varchar(300) NOT NULL COMMENT '图片简介',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `browse_num` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `study_num` int(11) NOT NULL DEFAULT '0' COMMENT '学习人数',
  `create_name` varchar(30) NOT NULL COMMENT '创建人',
  PRIMARY KEY (`id`),
  KEY `p_id` (`p_id`) USING BTREE,
  KEY `p_next_id` (`p_next_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of g_curriculums
-- ----------------------------
INSERT INTO `g_curriculums` VALUES ('3', '1', '2', 'gdfggf', 'dsfdsfsdfdsfds', '30', '60', '20190720\\2f970cf5c7c5202179a75d17f271ba7e.jpg', '1563631776', '0', '0', '');
INSERT INTO `g_curriculums` VALUES ('5', '1', '2', '101', '的沙发斯蒂芬', '30', '60', '20190721\\c15a0097ff65f84aed1acaa754da9fcc.jpg', '1563692742', '0', '0', 'admin');

-- ----------------------------
-- Table structure for `g_questions`
-- ----------------------------
DROP TABLE IF EXISTS `g_questions`;
CREATE TABLE `g_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(70) NOT NULL COMMENT '标题',
  `cat_id` int(11) NOT NULL DEFAULT '0' COMMENT '测试分类id',
  PRIMARY KEY (`id`),
  KEY `cat_id` (`cat_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of g_questions
-- ----------------------------
INSERT INTO `g_questions` VALUES ('2', '测试100000000000000', '3');
INSERT INTO `g_questions` VALUES ('6', '的地方1', '2');

-- ----------------------------
-- Table structure for `g_test_cat`
-- ----------------------------
DROP TABLE IF EXISTS `g_test_cat`;
CREATE TABLE `g_test_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(70) NOT NULL COMMENT '分类名称',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `cat_name` (`cat_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of g_test_cat
-- ----------------------------
INSERT INTO `g_test_cat` VALUES ('2', '的撒范德萨发', '1563688524');
INSERT INTO `g_test_cat` VALUES ('3', '第三方', '1563689076');

-- ----------------------------
-- Table structure for `g_user`
-- ----------------------------
DROP TABLE IF EXISTS `g_user`;
CREATE TABLE `g_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sex` tinyint(2) NOT NULL DEFAULT '0' COMMENT '性别;0:保密,1:男,2:女',
  `last_login_time` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '注册时间',
  `user_status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '1在职，0离职',
  `user_login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pass` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码;cmf_password加密',
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '用户手机号',
  PRIMARY KEY (`id`),
  KEY `user_login` (`user_login`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='用户表';

-- ----------------------------
-- Records of g_user
-- ----------------------------
INSERT INTO `g_user` VALUES ('1', '0', '1563796585', '1562552887', '1', 'admin', '78d47561c9df3be60c048d2f24a73080', '');
INSERT INTO `g_user` VALUES ('2', '1', '1563588976', '1562837322', '1', 'dkd', '37f26c2c86a350368498d01710ec589d', '18382426150');
