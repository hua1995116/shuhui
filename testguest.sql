-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2015 年 06 月 17 日 21:42
-- 服务器版本: 6.0.4
-- PHP 版本: 6.0.0-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `testguest`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `comment`
-- 

CREATE TABLE `comment` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `workname` varchar(100) NOT NULL COMMENT '作品名',
  `username` varchar(100) NOT NULL COMMENT '自己',
  `comment` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=119 ;

-- 
-- 导出表中的数据 `comment`
-- 

INSERT INTO `comment` VALUES (116, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' 1212', '2015-06-03 22:31:41');
INSERT INTO `comment` VALUES (115, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' 1212', '2015-06-03 22:31:31');
INSERT INTO `comment` VALUES (114, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' 123', '2015-06-03 22:31:19');
INSERT INTO `comment` VALUES (113, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' 3123', '2015-06-03 20:47:11');
INSERT INTO `comment` VALUES (112, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' 31231', '2015-06-03 20:47:08');
INSERT INTO `comment` VALUES (111, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' 3123', '2015-06-03 20:47:06');
INSERT INTO `comment` VALUES (110, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' 3123123', '2015-06-03 20:47:03');
INSERT INTO `comment` VALUES (109, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' 1231231', '2015-06-03 20:47:00');
INSERT INTO `comment` VALUES (108, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' 123', '2015-06-03 20:46:54');
INSERT INTO `comment` VALUES (117, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' erewr', '2015-06-03 22:31:45');
INSERT INTO `comment` VALUES (118, '楷书字帖谁的好 田英章书法视频楷书字帖谁', 'hua1995116', ' erewr', '2015-06-03 23:04:15');

-- --------------------------------------------------------

-- 
-- 表的结构 `fruit`
-- 

CREATE TABLE `fruit` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//用户自动编号',
  `work` varchar(40) NOT NULL COMMENT '//作品名称',
  `onwer` varchar(20) NOT NULL COMMENT '//作品作者',
  `name` varchar(20) NOT NULL COMMENT '//作品名称',
  `clicknum` int(8) unsigned NOT NULL DEFAULT '0' COMMENT '//点击量',
  `type` varchar(10) NOT NULL COMMENT '//作品类型',
  `admin` smallint(1) unsigned NOT NULL DEFAULT '0' COMMENT '//管理员审查',
  `time` datetime NOT NULL COMMENT '//上传时间',
  `ip` varchar(20) NOT NULL COMMENT '//IP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- 
-- 导出表中的数据 `fruit`
-- 

INSERT INTO `fruit` VALUES (17, '12120512bZ.jpg', '一时辉煌', '王羲之楷书', 74, '楷书', 1, '2015-06-02 21:55:21', '127.0.0.1');
INSERT INTO `fruit` VALUES (13, '4ed19882d158ccbfa67f5de41bd8bc3eb0354139', '一时辉煌', '这是楷书', 6, '楷书', 1, '2015-05-27 21:52:59', '127.0.0.1');
INSERT INTO `fruit` VALUES (12, 't0114982332030d0111.jpg', '一时辉煌', '这是什么书', 3, '行书', 1, '2015-05-27 17:38:07', '127.0.0.1');
INSERT INTO `fruit` VALUES (16, '234915-1406221R51317.jpg', 'hua1995116', '123', 10, '楷书', 1, '2015-06-01 17:31:43', '127.0.0.1');
INSERT INTO `fruit` VALUES (18, 't01c6612637c1c8ee33.jpg', '一时辉煌', '草书', 0, '草书', 1, '2015-06-03 00:36:47', '127.0.0.1');
INSERT INTO `fruit` VALUES (19, '902d4b4a20a4462352f74ebc9a22720e0cf3d73b', '一时辉煌', '阿什顿', 0, '行楷', 1, '2015-06-03 00:37:08', '127.0.0.1');
INSERT INTO `fruit` VALUES (20, 't01fdb4890acc29401d (1).jpg', '一时辉煌', '啊啊啥的', 1, '隶书', 1, '2015-06-03 00:37:23', '127.0.0.1');
INSERT INTO `fruit` VALUES (21, 'u=3258702598,3546010683&fm=21&gp=0.jpg', '一时辉煌', '阿桑大沙地', 0, '行楷', 1, '2015-06-03 00:37:41', '127.0.0.1');
INSERT INTO `fruit` VALUES (22, '361c4d540923dd5495fb4fb6d309b3de9d824870', '一时辉煌', '萨萨', 0, '行书', 1, '2015-06-03 00:37:57', '127.0.0.1');
INSERT INTO `fruit` VALUES (23, '5de30cfa513d26970a5de08357fbb2fb4216d876', '一时辉煌', 'asdsafasf', 0, '行楷', 1, '2015-06-03 01:13:22', '127.0.0.1');
INSERT INTO `fruit` VALUES (24, 'u=3497716200,1860569472&fm=21&gp=0.jpg', '一时辉煌', 'grhgdgfd', 0, '草书', 1, '2015-06-03 01:14:00', '127.0.0.1');
INSERT INTO `fruit` VALUES (25, 't0182fbac584c4bcc99 (1).jpg', '一时辉煌', 'asdfdsfg', 0, '隶书', 1, '2015-06-03 01:14:07', '127.0.0.1');
INSERT INTO `fruit` VALUES (26, 't0182fbac584c4bcc99 (1).jpg', '一时辉煌', 'asdfasfasfg', 0, '行书', 1, '2015-06-03 01:14:18', '127.0.0.1');
INSERT INTO `fruit` VALUES (27, 't01c6612637c1c8ee33.jpg', '一时辉煌', 'sfasdwef', 0, '草书', 1, '2015-06-03 01:14:29', '127.0.0.1');
INSERT INTO `fruit` VALUES (28, '25.jpg', 'hua1995116', '1234', 0, '楷书', 1, '2015-06-09 16:06:58', '127.0.0.1');

-- --------------------------------------------------------

-- 
-- 表的结构 `group_comment`
-- 

CREATE TABLE `group_comment` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `team` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- 
-- 导出表中的数据 `group_comment`
-- 

INSERT INTO `group_comment` VALUES (2, '123', 'hua1995116', ' 123', '2015-05-31 21:44:36');
INSERT INTO `group_comment` VALUES (3, '123', 'hua1995116', ' 123123', '2015-05-31 21:44:42');
INSERT INTO `group_comment` VALUES (4, '123', 'hua1995116', ' 123123', '2015-05-31 21:45:39');
INSERT INTO `group_comment` VALUES (5, '123', 'hua1995116', ' 123123', '2015-05-31 21:46:03');
INSERT INTO `group_comment` VALUES (6, '123', 'hua1995116', ' 123', '2015-05-31 22:03:04');
INSERT INTO `group_comment` VALUES (7, '444444', 'hua1995116', ' 321', '2015-06-01 18:37:34');
INSERT INTO `group_comment` VALUES (8, '334343', '一时辉煌', ' sewerdghjk/', '2015-06-02 21:51:37');
INSERT INTO `group_comment` VALUES (9, '334343', '一时辉煌', ' sewerdghjk/', '2015-06-02 21:51:52');
INSERT INTO `group_comment` VALUES (10, '334343', '一时辉煌', ' sewerdghjk/', '2015-06-02 21:52:05');
INSERT INTO `group_comment` VALUES (11, '334343', '一时辉煌', ' sewerdghjk/', '2015-06-02 21:52:09');

-- --------------------------------------------------------

-- 
-- 表的结构 `group_list`
-- 

CREATE TABLE `group_list` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `face` varchar(1000) NOT NULL,
  `limit_num` int(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `time` time NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

-- 
-- 导出表中的数据 `group_list`
-- 

INSERT INTO `group_list` VALUES (88, '恶搞违规', 'hua1995116', '行书', 'groupface/18.jpg', 10, '', '23:24:53');
INSERT INTO `group_list` VALUES (87, '该份额万股', 'hua1995116', '行楷', 'groupface/15.jpg', 20, '', '23:24:32');
INSERT INTO `group_list` VALUES (86, '恶搞歪歌', 'hua1995116', '行楷', 'groupface/14.jpg', 5, '', '23:24:15');
INSERT INTO `group_list` VALUES (85, '妻儿企鹅', 'hua1995116', '行楷', 'groupface/12.jpg', 10, '', '23:23:59');
INSERT INTO `group_list` VALUES (89, '额外各位', 'hua1995116', '行楷', 'groupface/20.jpg', 20, '', '23:25:28');
INSERT INTO `group_list` VALUES (83, '台湾人台湾', 'hua1995116', '隶书', 'groupface/7.jpg', 10, '', '23:22:49');
INSERT INTO `group_list` VALUES (82, '34234', 'hua1995116', '隶书', 'groupface/5.jpg', 10, '', '23:22:35');
INSERT INTO `group_list` VALUES (81, '334343', 'hua1995116', '楷书', 'groupface/3.jpg', 100, '', '23:22:11');
INSERT INTO `group_list` VALUES (80, '4333', 'hua1995116', '楷书', 'groupface/1.jpg', 20, '', '23:21:55');
INSERT INTO `group_list` VALUES (73, '13414', 'hua1995116', '隶书', 'groupface/3.jpg', 20, '', '13:48:00');
INSERT INTO `group_list` VALUES (74, '逗比队1', 'hua1995116', '楷书', 'groupface/8.jpg', 50, '很好的小组。', '17:36:11');
INSERT INTO `group_list` VALUES (75, '逗比2', 'hua1995116', '楷书', 'groupface/1.jpg', 10, '', '17:36:20');
INSERT INTO `group_list` VALUES (76, '32222', 'hua1995116', '草书', 'groupface/9.jpg', 20, '', '18:35:11');
INSERT INTO `group_list` VALUES (77, '33333', 'hua1995116', '草书', 'groupface/12.jpg', 50, '', '18:35:26');
INSERT INTO `group_list` VALUES (78, '4444', 'hua1995116', '行书', 'groupface/6.jpg', 100, '', '18:36:15');
INSERT INTO `group_list` VALUES (79, '444444', 'hua1995116', '行书', 'groupface/18.jpg', 20, '', '18:36:31');
INSERT INTO `group_list` VALUES (90, '恶搞热', 'hua1995116', '行楷', 'groupface/23.jpg', 10, '', '23:26:01');
INSERT INTO `group_list` VALUES (91, '纷纷为', 'hua1995116', '草书', 'groupface/24.jpg', 20, '', '23:26:23');
INSERT INTO `group_list` VALUES (92, '热吻为', 'hua1995116', '草书', 'groupface/27.jpg', 50, '', '23:26:42');
INSERT INTO `group_list` VALUES (93, '322让3', 'hua1995116', '隶书', 'groupface/26.jpg', 10, '', '23:28:04');
INSERT INTO `group_list` VALUES (94, '鄂武认为', 'hua1995116', '行楷', 'groupface/32.jpg', 10, '', '23:28:57');
INSERT INTO `group_list` VALUES (95, '各玩各', 'hua1995116', '行书', 'groupface/45.jpg', 50, '', '23:29:31');

-- --------------------------------------------------------

-- 
-- 表的结构 `group_member`
-- 

CREATE TABLE `group_member` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(100) NOT NULL,
  `join_name` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `join_time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=81 ;

-- 
-- 导出表中的数据 `group_member`
-- 

INSERT INTO `group_member` VALUES (39, '73', 'hua1995116', '1', '2015-05-24 13:48:00');
INSERT INTO `group_member` VALUES (59, '81', 'hua1995116', '1', '2015-06-01 23:22:11');
INSERT INTO `group_member` VALUES (58, '80', 'hua1995116', '1', '2015-06-01 23:21:55');
INSERT INTO `group_member` VALUES (60, '82', 'hua1995116', '1', '2015-06-01 23:22:35');
INSERT INTO `group_member` VALUES (46, '73', '123123', '0', '2015-05-30 20:30:22');
INSERT INTO `group_member` VALUES (79, '80', '123123', '0', '2015-06-04 21:42:31');
INSERT INTO `group_member` VALUES (76, '81', '123123', '0', '2015-06-04 21:34:13');
INSERT INTO `group_member` VALUES (52, '74', 'hua1995116', '1', '2015-06-01 17:36:11');
INSERT INTO `group_member` VALUES (53, '75', 'hua1995116', '1', '2015-06-01 17:36:20');
INSERT INTO `group_member` VALUES (54, '76', 'hua1995116', '1', '2015-06-01 18:35:11');
INSERT INTO `group_member` VALUES (55, '77', 'hua1995116', '1', '2015-06-01 18:35:26');
INSERT INTO `group_member` VALUES (56, '78', 'hua1995116', '1', '2015-06-01 18:36:15');
INSERT INTO `group_member` VALUES (57, '79', 'hua1995116', '1', '2015-06-01 18:36:31');
INSERT INTO `group_member` VALUES (61, '83', 'hua1995116', '1', '2015-06-01 23:22:49');
INSERT INTO `group_member` VALUES (63, '85', 'hua1995116', '1', '2015-06-01 23:23:59');
INSERT INTO `group_member` VALUES (64, '86', 'hua1995116', '1', '2015-06-01 23:24:15');
INSERT INTO `group_member` VALUES (65, '87', 'hua1995116', '1', '2015-06-01 23:24:32');
INSERT INTO `group_member` VALUES (66, '88', 'hua1995116', '1', '2015-06-01 23:24:53');
INSERT INTO `group_member` VALUES (67, '89', 'hua1995116', '1', '2015-06-01 23:25:28');
INSERT INTO `group_member` VALUES (68, '90', 'hua1995116', '1', '2015-06-01 23:26:01');
INSERT INTO `group_member` VALUES (69, '91', 'hua1995116', '1', '2015-06-01 23:26:23');
INSERT INTO `group_member` VALUES (70, '92', 'hua1995116', '1', '2015-06-01 23:26:42');
INSERT INTO `group_member` VALUES (71, '93', 'hua1995116', '1', '2015-06-01 23:28:04');
INSERT INTO `group_member` VALUES (72, '94', 'hua1995116', '1', '2015-06-01 23:28:57');
INSERT INTO `group_member` VALUES (73, '95', 'hua1995116', '1', '2015-06-01 23:29:31');
INSERT INTO `group_member` VALUES (74, '81', '一时辉煌', '0', '2015-06-02 19:58:52');
INSERT INTO `group_member` VALUES (80, '96', '123123', '1', '2015-06-11 00:16:02');

-- --------------------------------------------------------

-- 
-- 表的结构 `myclass`
-- 

CREATE TABLE `myclass` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `worksname` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

-- 
-- 导出表中的数据 `myclass`
-- 

INSERT INTO `myclass` VALUES (26, '38.jpg', '123123', '2015-06-11 12:12:37');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_article`
-- 

CREATE TABLE `tg_article` (
  `tg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//id',
  `tg_reid` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '//主题ID',
  `tg_username` varchar(20) NOT NULL COMMENT '//发帖人',
  `tg_type` tinyint(2) unsigned NOT NULL COMMENT '//发帖类型',
  `tg_title` varchar(40) NOT NULL COMMENT '//帖子标题',
  `tg_content` text NOT NULL COMMENT '//帖子内容',
  `tg_readcount` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '//阅读量',
  `tg_commendcount` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '//评论量',
  `tg_nice` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '//精华帖',
  `tg_last_modify_date` datetime NOT NULL COMMENT '//最后修改时间',
  `tg_date` datetime NOT NULL COMMENT '//发帖时间',
  PRIMARY KEY (`tg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

-- 
-- 导出表中的数据 `tg_article`
-- 

INSERT INTO `tg_article` VALUES (61, 60, '娜美', 5, 'RE:新人报到', ' 哦哦,美女姐姐你好我是娜美！！你能帮我一起画地图吗。', 0, 0, 0, '0000-00-00 00:00:00', '2015-05-30 18:23:30');
INSERT INTO `tg_article` VALUES (60, 0, '一时辉煌', 5, '新人报到', '大家好我是月煌。请以后多多关照。希望能学好书法！！！', 66, 4, 0, '0000-00-00 00:00:00', '2015-05-30 18:16:46');
INSERT INTO `tg_article` VALUES (62, 60, 'hua1995116', 5, 'RE:新人报到', '123214', 0, 0, 0, '0000-00-00 00:00:00', '2015-05-30 18:38:08');
INSERT INTO `tg_article` VALUES (63, 0, 'hua1995116', 1, '123123', '123123231231231http://localhost/duomeiti2.7/commty/qpic/1/2.gif', 83, 2, 0, '0000-00-00 00:00:00', '2015-05-30 18:40:08');
INSERT INTO `tg_article` VALUES (64, 63, 'hua1995116', 1, 'RE:123123', '123333', 0, 0, 0, '0000-00-00 00:00:00', '2015-06-01 20:11:38');
INSERT INTO `tg_article` VALUES (65, 0, 'hua1995116', 15, '24124124', '哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈', 11, 0, 0, '0000-00-00 00:00:00', '2015-06-01 20:12:29');
INSERT INTO `tg_article` VALUES (66, 0, 'hua1995116', 1, '低洼', '死死死死死死死死死死死死死死死死死死死死死死死死死死死死死', 2, 0, 0, '0000-00-00 00:00:00', '2015-06-04 22:08:36');
INSERT INTO `tg_article` VALUES (67, 60, 'hua1995116', 5, 'RE:新人报到', '个哈哈哈', 0, 0, 0, '0000-00-00 00:00:00', '2015-06-04 22:09:45');
INSERT INTO `tg_article` VALUES (68, 60, 'hua1995116', 5, 'RE:新人报到', '正洋sb', 0, 0, 0, '0000-00-00 00:00:00', '2015-06-04 22:10:18');
INSERT INTO `tg_article` VALUES (69, 63, 'hua1995116', 1, 'RE:123123', '让鱼儿鱼儿', 0, 0, 0, '0000-00-00 00:00:00', '2015-06-04 22:10:57');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_dir`
-- 

CREATE TABLE `tg_dir` (
  `tg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//ID',
  `tg_name` varchar(20) NOT NULL COMMENT '//相册目录名',
  `tg_type` tinyint(1) unsigned NOT NULL COMMENT '//相册的类型',
  `tg_password` char(40) DEFAULT NULL COMMENT '//相册的密码',
  `tg_content` varchar(200) DEFAULT NULL COMMENT '//相册的描述',
  `tg_face` varchar(200) DEFAULT NULL COMMENT '//相册目录封面',
  `tg_dir` varchar(200) NOT NULL COMMENT '//相册的物理地址',
  `tg_date` datetime NOT NULL COMMENT '//相册创建的时间',
  PRIMARY KEY (`tg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- 导出表中的数据 `tg_dir`
-- 

INSERT INTO `tg_dir` VALUES (3, '网络游戏宣传图', 0, NULL, '网络游戏宣传图', 'monipic/moshou.jpg', 'photo/1286182218', '2010-10-04 16:50:18');
INSERT INTO `tg_dir` VALUES (4, '诱惑ChinaJoy2010', 1, '7c4a8d09ca3762af61e59520943dc26494f8941b', '诱惑ChinaJoy2010', 'monipic/chinajoy.jpg', 'photo/1286182238', '2010-10-04 16:50:38');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_flower`
-- 

CREATE TABLE `tg_flower` (
  `tg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//ID',
  `tg_touser` varchar(20) NOT NULL COMMENT '//收花者',
  `tg_fromuser` varchar(20) NOT NULL COMMENT '//送花着',
  `tg_flower` mediumint(8) unsigned NOT NULL COMMENT '//花朵个数',
  `tg_content` varchar(200) NOT NULL COMMENT '//感言',
  `tg_date` datetime NOT NULL COMMENT '//时间',
  PRIMARY KEY (`tg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- 导出表中的数据 `tg_flower`
-- 

INSERT INTO `tg_flower` VALUES (1, '娜美', '炎日', 88, '灰常欣赏你，送你花啦~~~', '2010-09-15 21:03:43');
INSERT INTO `tg_flower` VALUES (3, '娜美', '炎日', 14, '灰常欣赏你，送你花啦~~~', '2010-09-15 21:04:14');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_friend`
-- 

CREATE TABLE `tg_friend` (
  `id` mediumint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '//ID',
  `fromuser` varchar(20) NOT NULL COMMENT '//申请人',
  `touser` varchar(20) NOT NULL COMMENT '//受邀请人',
  `time` datetime NOT NULL COMMENT '//时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- 导出表中的数据 `tg_friend`
-- 

INSERT INTO `tg_friend` VALUES (4, 'mzyaimll', '一时辉煌', '2015-05-07 14:26:28');
INSERT INTO `tg_friend` VALUES (5, 'hua1995116', '一时辉煌', '2015-05-31 19:47:24');
INSERT INTO `tg_friend` VALUES (6, '一时辉煌', 'hua1995116', '2015-06-02 21:39:29');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_message`
-- 

CREATE TABLE `tg_message` (
  `tg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//ID',
  `tg_touser` varchar(20) NOT NULL COMMENT '//收信人',
  `tg_fromuser` varchar(20) NOT NULL COMMENT '//发信人',
  `tg_content` varchar(200) NOT NULL COMMENT '//发信内容',
  `tg_state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '//短信状态',
  `tg_date` datetime NOT NULL COMMENT '//发送时间',
  PRIMARY KEY (`tg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

-- 
-- 导出表中的数据 `tg_message`
-- 

INSERT INTO `tg_message` VALUES (1, '娜美', '炎日', '奈美你好，我想和你交朋友！！！', 0, '2010-09-09 11:21:15');
INSERT INTO `tg_message` VALUES (2, '炎日', '妮可罗宾', '方寸间，历数世上桑田沧海；时空里，细问人间暑往寒来；是朋友，星移斗转情不改；是知音，天涯海角记心怀。', 1, '2010-09-12 09:51:24');
INSERT INTO `tg_message` VALUES (3, '炎日', '香吉士', '风是透明的，雨是滴答的，云是流动的，歌是自由的，爱是用心的，恋是疯狂的，天是永恒的，你是难忘的。', 1, '2010-09-12 09:51:55');
INSERT INTO `tg_message` VALUES (4, '炎日', '索罗', '初遇你的心情是温馨的，和你交友的时候是真心的，与你在一起的时候是开心的，认识你这个朋友是无怨无悔的。', 1, '2010-09-12 09:52:45');
INSERT INTO `tg_message` VALUES (5, '炎日', '娜美', '风雨的街头，招牌能挂多久，爱过的老歌，你能记得几首，别忘了有像我这样的一位朋友！永远祝福你！', 1, '2010-09-12 09:54:17');
INSERT INTO `tg_message` VALUES (6, '炎日', '路飞', '恭喜发财财运到，财神对你哈哈笑，自摸杠点随你挑，抓到手里都是宝，收钱收到手酸掉，牌友气得哇哇叫。', 1, '2010-09-12 09:54:45');
INSERT INTO `tg_message` VALUES (19, '娜美', '炎日', '娜美，你好呀，我想和你交朋友！', 0, '2010-09-14 07:08:33');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_photo`
-- 

CREATE TABLE `tg_photo` (
  `tg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//ID',
  `tg_name` varchar(20) NOT NULL COMMENT '//图片名',
  `tg_url` varchar(200) NOT NULL COMMENT '//图片路径',
  `tg_content` varchar(200) DEFAULT NULL COMMENT '//图片简介',
  `tg_sid` mediumint(8) unsigned NOT NULL COMMENT '//图片所在的目录',
  `tg_username` varchar(20) NOT NULL COMMENT '//上传者',
  `tg_readcount` smallint(5) NOT NULL DEFAULT '0' COMMENT '//浏览量',
  `tg_commendcount` smallint(5) NOT NULL DEFAULT '0' COMMENT '//评论量',
  `tg_date` datetime NOT NULL,
  PRIMARY KEY (`tg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- 
-- 导出表中的数据 `tg_photo`
-- 

INSERT INTO `tg_photo` VALUES (1, '仙剑奇侠传三', 'photo/1286182218/1286241130.jpg', '仙剑奇侠传三', 3, '炎日', 2, 0, '2010-10-05 09:12:22');
INSERT INTO `tg_photo` VALUES (2, '仙剑奇侠传四', 'photo/1286182218/1286241210.jpg', '仙剑奇侠传四', 3, '炎日', 4, 0, '2010-10-05 09:13:33');
INSERT INTO `tg_photo` VALUES (3, 'ChinaJoyMM1', 'photo/1286182238/1286241247.jpg', 'ChinaJoyMM1', 4, '炎日', 11, 0, '2010-10-05 09:14:09');
INSERT INTO `tg_photo` VALUES (4, 'ChinaJoyMM2', 'photo/1286182238/1286241260.jpg', 'ChinaJoyMM2', 4, '炎日', 11, 0, '2010-10-05 09:14:47');
INSERT INTO `tg_photo` VALUES (5, '网络游戏1', 'photo/1286182218/1286245379.jpg', '网络游戏1', 3, '炎日', 6, 0, '2010-10-05 10:23:07');
INSERT INTO `tg_photo` VALUES (6, '网络游戏2', 'photo/1286182218/1286245397.jpg', '网络游戏2', 3, '炎日', 10, 0, '2010-10-05 10:23:23');
INSERT INTO `tg_photo` VALUES (7, 'ChinaJoyMM3', 'photo/1286182238/1286245414.jpg', 'ChinaJoyMM3', 4, '炎日', 13, 0, '2010-10-05 10:23:42');
INSERT INTO `tg_photo` VALUES (8, 'ChinaJoyMM4', 'photo/1286182238/1286245482.jpg', 'ChinaJoyMM4', 4, '炎日', 14, 0, '2010-10-05 10:24:50');
INSERT INTO `tg_photo` VALUES (9, '网络游戏4', 'photo/1286182218/1286245546.jpg', '网络游戏4', 3, '炎日', 9, 0, '2010-10-05 10:26:03');
INSERT INTO `tg_photo` VALUES (10, '网络游戏6', 'photo/1286182218/1286245571.jpg', '网络游戏6', 3, '炎日', 27, 0, '2010-10-05 10:26:18');
INSERT INTO `tg_photo` VALUES (11, 'ChinaJoyMM5', 'photo/1286182238/1286245602.jpg', 'ChinaJoyMM5', 4, '炎日', 21, 0, '2010-10-05 10:26:49');
INSERT INTO `tg_photo` VALUES (12, 'ChinaJoyMM6', 'photo/1286182238/1286245615.jpg', 'ChinaJoyMM6', 4, '炎日', 76, 0, '2010-10-05 10:27:01');
INSERT INTO `tg_photo` VALUES (13, 'ChinaJoyMM7', 'photo/1286182218/1286245693.jpg', 'ChinaJoyMM7', 3, '炎日', 4, 0, '2010-10-05 10:28:20');
INSERT INTO `tg_photo` VALUES (14, 'ChinaJoyMM8', 'photo/1286182218/1286245706.jpg', 'ChinaJoyMM8', 3, '炎日', 2, 0, '2010-10-05 10:28:31');
INSERT INTO `tg_photo` VALUES (15, 'ChinaJoyMM7', 'photo/1286182238/1286245723.jpg', 'ChinaJoyMM7', 4, '炎日', 21, 1, '2010-10-05 10:28:56');
INSERT INTO `tg_photo` VALUES (16, 'ChinaJoyMM9', 'photo/1286182238/1286245744.jpg', 'ChinaJoyMM9', 4, '炎日', 15, 0, '2010-10-05 10:29:10');
INSERT INTO `tg_photo` VALUES (17, '网络游戏9', 'photo/1286182218/1286245768.jpg', '网络游戏9', 3, '炎日', 5, 0, '2010-10-05 10:29:39');
INSERT INTO `tg_photo` VALUES (18, '网络游戏10', 'photo/1286182218/1286245785.jpg', '网络游戏10', 3, '炎日', 6, 0, '2010-10-05 10:29:51');
INSERT INTO `tg_photo` VALUES (19, 'ChinaJoyMM9', 'photo/1286182238/1286245804.jpg', 'ChinaJoyMM9', 4, '炎日', 119, 8, '2010-10-05 10:30:10');
INSERT INTO `tg_photo` VALUES (20, 'ChinaJoyMM10', 'photo/1286182238/1286245817.jpg', 'ChinaJoyMM10', 4, '炎日', 18, 0, '2010-10-05 10:30:21');
INSERT INTO `tg_photo` VALUES (22, '网络游戏11', 'photo/1286182218/1286287942.jpg', '网络游戏11', 3, '星矢', 9, 0, '2010-10-05 22:12:43');
INSERT INTO `tg_photo` VALUES (23, 'ChinaJoyMM11', 'photo/1286182238/1286287984.jpg', 'ChinaJoyMM11', 4, '星矢', 48, 0, '2010-10-05 22:13:11');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_photo_commend`
-- 

CREATE TABLE `tg_photo_commend` (
  `tg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//ID',
  `tg_title` varchar(20) NOT NULL COMMENT '//评论标题',
  `tg_content` text NOT NULL COMMENT '//评论内容',
  `tg_sid` mediumint(8) unsigned NOT NULL COMMENT '//图片的ID',
  `tg_username` varchar(20) NOT NULL COMMENT '//评论者',
  `tg_date` datetime NOT NULL COMMENT '//评论时间',
  PRIMARY KEY (`tg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- 导出表中的数据 `tg_photo_commend`
-- 

INSERT INTO `tg_photo_commend` VALUES (1, 'RE:ChinaJoyMM9', '我非常喜欢这位姐姐！！[img]qpic/3/11.gif[/img]', 19, '娜美', '2010-10-06 21:23:35');
INSERT INTO `tg_photo_commend` VALUES (2, 'RE:ChinaJoyMM9', '[img]qpic/3/8.gif[/img][img]qpic/3/5.gif[/img][img]qpic/3/4.gif[/img]', 19, '娜美', '2010-10-06 21:24:20');
INSERT INTO `tg_photo_commend` VALUES (3, 'RE:ChinaJoyMM9', '[img]qpic/2/4.gif[/img][img]qpic/2/5.gif[/img]', 19, '娜美', '2010-10-06 21:24:28');
INSERT INTO `tg_photo_commend` VALUES (4, 'RE:ChinaJoyMM9', '[img]qpic/1/7.gif[/img][img]qpic/1/4.gif[/img][img]qpic/1/1.gif[/img][img]qpic/1/2.gif[/img]', 19, '娜美', '2010-10-06 21:24:37');
INSERT INTO `tg_photo_commend` VALUES (5, 'RE:ChinaJoyMM9', '[img]qpic/1/18.gif[/img][img]qpic/1/24.gif[/img][img]qpic/1/29.gif[/img]', 19, '娜美', '2010-10-06 21:24:52');
INSERT INTO `tg_photo_commend` VALUES (6, 'RE:ChinaJoyMM9', '[img]qpic/3/19.gif[/img][img]qpic/3/16.gif[/img][img]qpic/3/18.gif[/img]', 19, '娜美', '2010-10-06 21:25:01');
INSERT INTO `tg_photo_commend` VALUES (7, 'RE:ChinaJoyMM9', '[img]qpic/3/32.gif[/img][img]qpic/3/28.gif[/img][img]qpic/3/27.gif[/img][img]qpic/3/21.gif[/img]', 19, '娜美', '2010-10-06 21:25:09');
INSERT INTO `tg_photo_commend` VALUES (8, 'RE:ChinaJoyMM9', '我也非常喜欢这位姐姐~~~', 19, '索罗', '2010-10-06 21:34:15');
INSERT INTO `tg_photo_commend` VALUES (9, 'RE:ChinaJoyMM7', '不错，不错！！！[img]qpic/3/2.gif[/img][img]qpic/3/1.gif[/img][img]qpic/3/4.gif[/img]', 15, '索罗', '2010-10-06 21:35:39');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_sc`
-- 

CREATE TABLE `tg_sc` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `worksname` varchar(40) NOT NULL COMMENT '作品名称',
  `scuser` varchar(20) NOT NULL COMMENT '收藏的会员名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

-- 
-- 导出表中的数据 `tg_sc`
-- 

INSERT INTO `tg_sc` VALUES (28, 't01fdb4890acc29401d (1).jpg', 'hua1995116');
INSERT INTO `tg_sc` VALUES (27, 't0182fbac584c4bcc99 (1).jpg', 'hua1995116');
INSERT INTO `tg_sc` VALUES (26, '234915-1406221R51317.jpg', 'hua1995116');
INSERT INTO `tg_sc` VALUES (25, '12120512bZ.jpg', 'hua1995116');
INSERT INTO `tg_sc` VALUES (29, 't0182fbac584c4bcc99 (1).jpg', '123123');
INSERT INTO `tg_sc` VALUES (30, '4ed19882d158ccbfa67f5de41bd8bc3eb0354139', '123123');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_system`
-- 

CREATE TABLE `tg_system` (
  `tg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//ID',
  `tg_webname` varchar(20) NOT NULL COMMENT '//网站名称',
  `tg_article` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '//文章分页数',
  `tg_blog` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '//博友分页数',
  `tg_photo` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '//相册分页数',
  `tg_skin` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '//网站皮肤',
  `tg_string` varchar(200) NOT NULL COMMENT '//网站敏感字符串',
  `tg_post` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '//发帖限制',
  `tg_re` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '//回帖限制',
  `tg_code` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '//是否启用验证码',
  `tg_register` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '//是否开放会员',
  PRIMARY KEY (`tg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `tg_system`
-- 

INSERT INTO `tg_system` VALUES (1, '瓢城Web俱乐部(YC60.COM)', 10, 15, 12, 1, '他妈的|NND|草|操|垃圾|淫荡|贱货|SB|sb|jb|JB|法轮功|小泉', 60, 15, 1, 1);

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_user`
-- 

CREATE TABLE `tg_user` (
  `tg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//用户自动编号',
  `tg_uniqid` char(40) NOT NULL COMMENT '//验证身份的唯一标识符',
  `tg_active` char(40) NOT NULL COMMENT '//激活登录用户',
  `tg_username` varchar(20) NOT NULL COMMENT '//用户名',
  `tg_user` varchar(20) NOT NULL COMMENT '//用户昵称',
  `tg_password` char(40) NOT NULL COMMENT '//密码',
  `tg_email` varchar(40) DEFAULT NULL COMMENT '//邮件',
  `tg_qq` varchar(10) DEFAULT NULL COMMENT '//QQ',
  `tg_url` varchar(40) DEFAULT NULL COMMENT '//网址',
  `tg_sex` char(1) NOT NULL COMMENT '//性别',
  `tg_face` char(40) NOT NULL COMMENT '//头像',
  `tg_switch` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '//个性签名开关',
  `tg_autograph` varchar(200) DEFAULT NULL COMMENT '//签名内容',
  `tg_level` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '//会员等级',
  `tg_post_time` varchar(20) NOT NULL DEFAULT '0' COMMENT '//发帖的时间戳',
  `tg_article_time` varchar(20) NOT NULL DEFAULT '0' COMMENT '//回帖的时间戳',
  `tg_reg_time` datetime NOT NULL COMMENT '//注册时间',
  `tg_last_time` datetime NOT NULL COMMENT '//最后登录的时间',
  `tg_last_ip` varchar(20) NOT NULL COMMENT '//最后登录的IP',
  `tg_login_count` smallint(4) unsigned NOT NULL DEFAULT '0' COMMENT '//登录次数',
  PRIMARY KEY (`tg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

-- 
-- 导出表中的数据 `tg_user`
-- 

INSERT INTO `tg_user` VALUES (55, 'b80ea7801e927ba932b057ac6498f3ac0976f577', '78f98486fb683d1d2023504aa14bf62e31457732', '123123', '', 'fc9f42a7d7bb4362306835716e8f079df7c31c2c', '', '', NULL, '男', 'images/face/face26.jpg', 0, NULL, 0, '0', '0', '2015-05-14 15:58:20', '2015-06-11 12:12:11', '127.0.0.1', 16);
INSERT INTO `tg_user` VALUES (56, 'b9748976eef51224601f32b1b82265d25d347367', 'bac6d793e004cf6071b6527fcdc75c0260331cf6', 'bbb123', '', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', NULL, '男', '', 0, NULL, 0, '0', '0', '2015-05-18 20:37:55', '2015-05-18 20:38:17', '127.0.0.1', 1);
INSERT INTO `tg_user` VALUES (57, '1a7066c58aa419b3c03aeb64e4d0549db0656b95', 'e718cee2fd342303aa767af71867596f5e89ef7e', 'hua1995116', '仲夏', 'fc9f42a7d7bb4362306835716e8f079df7c31c2c', '461249104@qq.com', '4612149104', NULL, '男', 'images/face/face18.jpg', 0, '蓝色的天。', 1, '1433426916', '1433427057', '2015-05-18 21:47:39', '2015-06-11 12:13:15', '127.0.0.1', 28);
INSERT INTO `tg_user` VALUES (58, 'b99555fd651be9892237d9d6be4de1df52b48904', 'f3e29c2269fba1981a14791f1c8ec67fa40e3d2a', '一时辉煌', '路飞', '9624526', '976736530@qq.com', '976736530', NULL, '男', 'images/face/face6.jpg', 0, '我是路飞为了我的梦想而来！', 1, '1432981006', '1432979675', '2015-05-19 23:58:51', '2015-06-04 21:56:44', '127.0.0.1', 36);
INSERT INTO `tg_user` VALUES (59, 'fb56c7768f20073f141657f954ed8e34e9818c7f', '667b2bb646f4a9113cebb87436faf88d15adf6e2', '一时辉煌', '路飞', 'cfad998970c92116ac41ac25fd21dafff58a14b6', '976736530@qq.com', '976736530', NULL, '男', 'images/face/face6.jpg', 0, '我是路飞为了我的梦想而来！', 0, '1432981006', '1432979675', '2015-05-30 17:44:09', '2015-06-04 21:56:44', '127.0.0.1', 9);
INSERT INTO `tg_user` VALUES (60, '485575070525f9722939dd374b129a7a5b85cf0c', '849b46784baaae8a2675d917b08a1f01ba5a830a', '娜美', '娜美', 'cfad998970c92116ac41ac25fd21dafff58a14b6', '', '', NULL, '女', 'images/face/face9.jpg', 0, '大家好我是娜美,一名出色的航海士.我的梦想是画出世界地图.', 0, '0', '1432981410', '2015-05-30 18:21:30', '2015-06-03 02:00:32', '127.0.0.1', 2);
INSERT INTO `tg_user` VALUES (61, 'f0e7769be9bfee029ec580c31a8e11179f701cc3', 'beb76bc5fba047339b217977e8a04af04e2a796b', '123123', '', '601f1889667efaebb33b8c12572835da3f027f78', '461249104@qq.com', '4612149104', NULL, '', 'images/face/face26.jpg', 0, NULL, 1, '0', '0', '2015-05-30 18:33:25', '2015-06-11 12:12:11', '127.0.0.1', 13);
INSERT INTO `tg_user` VALUES (62, '95352ee3b149934a8c1d3b0b212d20c2d92e99e9', '5b99b11f4238494d0037d314c912ef28a8a8e78b', 'hua19951161', '', 'fc9f42a7d7bb4362306835716e8f079df7c31c2c', '461249104@qq.com', '4612149104', NULL, '', 'images/face/face1.jpg', 0, NULL, 0, '0', '0', '2015-06-03 13:03:48', '2015-06-03 13:03:53', '127.0.0.1', 1);

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_vidio`
-- 

CREATE TABLE `tg_vidio` (
  `id` mediumint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `fromuser` varchar(20) NOT NULL COMMENT '上传的用户名',
  `type` varchar(100) NOT NULL,
  `woknme` varchar(20) NOT NULL COMMENT '作品名',
  `img` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `tg_time` datetime NOT NULL COMMENT '上传时间',
  `tg_ip` varchar(20) NOT NULL COMMENT '上传的IP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- 导出表中的数据 `tg_vidio`
-- 

INSERT INTO `tg_vidio` VALUES (14, 'hua1995116', '楷书', '7.jpg', '7.jpg', '', '2015-06-03 23:26:28', '127.0.0.1');
INSERT INTO `tg_vidio` VALUES (13, 'hua1995116', '楷书', '1.jpg', '1.jpg', '', '2015-06-03 23:26:04', '127.0.0.1');
INSERT INTO `tg_vidio` VALUES (12, '一时辉煌', '楷书', '楷书字帖谁的好 田英章书法视频楷书字帖谁', 't01b89b6a35aa19d612.jpg', '', '2015-06-03 02:13:53', '127.0.0.1');
INSERT INTO `tg_vidio` VALUES (15, 'hua1995116', '楷书', '12.jpg', '8.jpg', '', '2015-06-03 23:26:44', '127.0.0.1');
INSERT INTO `tg_vidio` VALUES (16, 'hua1995116', '隶书', '10.jpg', '6.jpg', '', '2015-06-03 23:26:59', '127.0.0.1');
INSERT INTO `tg_vidio` VALUES (17, 'hua1995116', '楷书', '17.jpg', '5.jpg', '', '2015-06-03 23:27:15', '127.0.0.1');
INSERT INTO `tg_vidio` VALUES (18, 'hua1995116', '行楷', '50.jpg', '6.jpg', '', '2015-06-03 23:27:26', '127.0.0.1');
INSERT INTO `tg_vidio` VALUES (19, 'hua1995116', '楷书', '45.jpg', '5.jpg', '', '2015-06-03 23:27:48', '127.0.0.1');
INSERT INTO `tg_vidio` VALUES (20, 'hua1995116', '楷书', '38.jpg', '45.jpg', '', '2015-06-03 23:28:08', '127.0.0.1');

-- --------------------------------------------------------

-- 
-- 表的结构 `tg_zan`
-- 

CREATE TABLE `tg_zan` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `worksname` varchar(40) NOT NULL COMMENT '作品名字',
  `zanuser` varchar(20) NOT NULL COMMENT '点赞的会员名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

-- 
-- 导出表中的数据 `tg_zan`
-- 

INSERT INTO `tg_zan` VALUES (38, '4ed19882d158ccbfa67f5de41bd8bc3eb0354139', 'hua1995116');
INSERT INTO `tg_zan` VALUES (37, '234915-1406221R51317.jpg', 'hua1995116');
INSERT INTO `tg_zan` VALUES (39, 't0182fbac584c4bcc99 (1).jpg', '123123');
INSERT INTO `tg_zan` VALUES (40, '4ed19882d158ccbfa67f5de41bd8bc3eb0354139', '123123');
