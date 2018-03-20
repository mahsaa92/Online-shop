/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     5/15/2014 9:12:33 AM                         */
/*==============================================================*/


drop table if exists Camera;

drop table if exists Review;

drop table if exists Tbl_Brand;

drop table if exists Tbl_Chipset;

drop table if exists Tbl_Color;

drop table if exists Tbl_General_Specification;

drop table if exists Tbl_Guarantee;

drop table if exists Tbl_Main_Menu;

drop table if exists Tbl_Memory;

drop table if exists Tbl_Menu;

drop table if exists Tbl_Mobile;

drop table if exists Tbl_NetWork;

drop table if exists Tbl_Person;

drop table if exists Tbl_SHoppingBasket;

drop table if exists Tbl_Screen;

drop table if exists Tbl_Software_Facilities;

drop table if exists Tbl_Sound;

/*==============================================================*/
/* Table: Camera                                                */
/*==============================================================*/
create table Camera
(
   Camera_Id            int not null,
   Mbl_Id               int,
   Quality              char(50),
   Imag_Size            char(50),
   Video_Capture        int,
   Dimension_Films      char(50),
   primary key (Camera_Id)
);

/*==============================================================*/
/* Table: Review                                                */
/*==============================================================*/
create table Review
(
   RV_Id                int not null,
   Mbl_Id               int,
   Titel                char(100),
   text                 text,
   Imeag                char(250),
   primary key (RV_Id)
);

/*==============================================================*/
/* Table: Tbl_Brand                                             */
/*==============================================================*/
create table Tbl_Brand
(
   Brnd_Id              int not null,
   Name                 varchar(50),
   Logo                 varchar(255),
   primary key (Brnd_Id)
);

/*==============================================================*/
/* Table: Tbl_Chipset                                           */
/*==============================================================*/
create table Tbl_Chipset
(
   chpst_Id             int not null,
   Mbl_Id               int,
   Name                 varchar(50),
   Model                char(100),
   Speed                char(100),
   GPU                  char(100),
   primary key (chpst_Id)
);

/*==============================================================*/
/* Table: Tbl_Color                                             */
/*==============================================================*/
create table Tbl_Color
(
   Clr_Id               int not null,
   Mbl_Id               int,
   Name                 varchar(50),
   primary key (Clr_Id)
);

/*==============================================================*/
/* Table: Tbl_General_Specification                             */
/*==============================================================*/
create table Tbl_General_Specification
(
   G_Spcfc_Id           int not null,
   Mbl_Id               int,
   Num_Sim              int,
   Dimensions           char(100),
   Weight               int,
   primary key (G_Spcfc_Id)
);

/*==============================================================*/
/* Table: Tbl_Guarantee                                         */
/*==============================================================*/
create table Tbl_Guarantee
(
   grnrt_Id             int not null,
   Mbl_Id               int,
   Name                 varchar(50),
   primary key (grnrt_Id)
);

/*==============================================================*/
/* Table: Tbl_Main_Menu                                         */
/*==============================================================*/
create table Tbl_Main_Menu
(
   Main_Id              int not null,
   Mn_Id                int,
   Name                 varchar(50),
   Description          text,
   Icon_Active          varchar(512),
   Icon_Dectivate       varchar(512),
   primary key (Main_Id)
);

/*==============================================================*/
/* Table: Tbl_Memory                                            */
/*==============================================================*/
create table Tbl_Memory
(
   Memo_Id              int not null,
   Mbl_Id               int,
   Internal             int,
   Ram                  int,
   Card                 int,
   Card_Type            char(100),
   primary key (Memo_Id)
);

/*==============================================================*/
/* Table: Tbl_Menu                                              */
/*==============================================================*/
create table Tbl_Menu
(
   Mn_Id                int not null,
   Parent_Id            int,
   Name                 varchar(50),
   Link                 varchar(200),
   Background_Image     varchar(512),
   Logo_Image           varchar(512),
   Tooltip_Text         varchar(200),
   Caption              varchar(100),
   primary key (Mn_Id)
);

/*==============================================================*/
/* Table: Tbl_Mobile                                            */
/*==============================================================*/
create table Tbl_Mobile
(
   Mbl_Id               int not null,
   Brnd_Id              int,
   SHpngBskt_Id         int,
   Status               int,
   Price                int,
   Model                char(100),
   Image                char(255),
   Advantage            text,
   Disadvantage         text,
   primary key (Mbl_Id)
);

/*==============================================================*/
/* Table: Tbl_NetWork                                           */
/*==============================================================*/
create table Tbl_NetWork
(
   Net_Id               int not null,
   Mbl_Id               int,
   Wide_Band_2G         text,
   3G                   int,
   Wide_Band_3G         text,
   Description_3G       text,
   4G                   int,
   Wide_Band_4G         text,
   Description_4G       text,
   GPRS                 int,
   Description_GPRS     text,
   Edge                 int,
   escription_Edge      text,
   Wi_Fi                int,
   Description_Wi_Fi    text,
   GPS                  int,
   Description_GPS      text,
   NFC                  int,
   Bluetooth            int,
   Description_Bluetooth text,
   USB                  int,
   Description_USB      text,
   primary key (Net_Id)
);

/*==============================================================*/
/* Table: Tbl_Person                                            */
/*==============================================================*/
create table Tbl_Person
(
   Prsn_Id              int not null,
   SHpngBskt_Id         int,
   Username             varchar(50),
   Password             varchar(50),
   Email                varchar(100),
   Register_Date        date,
   Register_Time        time,
   Mobile               varchar(50),
   NicName              varchar(50),
   primary key (Prsn_Id)
);

/*==============================================================*/
/* Table: Tbl_SHoppingBasket                                    */
/*==============================================================*/
create table Tbl_SHoppingBasket
(
   SHpngBskt_Id         int not null,
   Date                 varchar(10),
   primary key (SHpngBskt_Id)
);

/*==============================================================*/
/* Table: Tbl_Screen                                            */
/*==============================================================*/
create table Tbl_Screen
(
   Scrn_Id              int not null,
   Mbl_Id               int,
   Color                int,
   Main_Type            char(100),
   Size                 char(100),
   Resolution           char(100),
   Pixel                int,
   num_color            int,
   primary key (Scrn_Id)
);

/*==============================================================*/
/* Table: Tbl_Software_Facilities                               */
/*==============================================================*/
create table Tbl_Software_Facilities
(
   Soft_Id              int not null,
   Mbl_Id               int,
   Attribute_150        char(10),
   OS                   char(50),
   OS_Version           char(50),
   Java                 int,
   Microsoft_Office     int,
   PDF                  int,
   sms                  int,
   mms                  int,
   Playing_Music        int,
   Music_Formats        char(100),
   Play_Video           int,
   Video_formats        char(100),
   Audio_Recording      int,
   primary key (Soft_Id)
);

/*==============================================================*/
/* Table: Tbl_Sound                                             */
/*==============================================================*/
create table Tbl_Sound
(
   Sound_Id             int not null,
   Mbl_Id               int,
   Type_of_alarm        char(50),
   primary key (Sound_Id)
);

alter table Camera add constraint FK_Relationship_10 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Review add constraint FK_Relationship_15 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Tbl_Chipset add constraint FK_Relationship_7 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Tbl_Color add constraint FK_Relationship_4 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Tbl_General_Specification add constraint FK_Relationship_14 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Tbl_Guarantee add constraint FK_Relationship_3 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Tbl_Main_Menu add constraint FK_Relationship_2 foreign key (Mn_Id)
      references Tbl_Menu (Mn_Id) on delete restrict on update restrict;

alter table Tbl_Memory add constraint FK_Relationship_6 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Tbl_Mobile add constraint FK_Relationship_11 foreign key (Brnd_Id)
      references Tbl_Brand (Brnd_Id) on delete restrict on update restrict;

alter table Tbl_Mobile add constraint FK_Relationship_5 foreign key (SHpngBskt_Id)
      references Tbl_SHoppingBasket (SHpngBskt_Id) on delete restrict on update restrict;

alter table Tbl_NetWork add constraint FK_Relationship_8 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Tbl_Person add constraint FK_Relationship_1 foreign key (SHpngBskt_Id)
      references Tbl_SHoppingBasket (SHpngBskt_Id) on delete restrict on update restrict;

alter table Tbl_Screen add constraint FK_Relationship_9 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Tbl_Software_Facilities add constraint FK_Relationship_13 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

alter table Tbl_Sound add constraint FK_Relationship_12 foreign key (Mbl_Id)
      references Tbl_Mobile (Mbl_Id) on delete restrict on update restrict;

