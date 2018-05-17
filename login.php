{\rtf1\ansi\ansicpg949\cocoartf1561\cocoasubrtf400
{\fonttbl\f0\fnil\fcharset0 Menlo-Regular;}
{\colortbl;\red255\green255\blue255;\red196\green14\blue197;\red238\green255\blue204;\red0\green0\blue0;
\red176\green33\blue23;\red188\green97\blue25;\red41\green169\blue182;\red42\green175\blue26;\red61\green6\blue215;
}
{\*\expandedcolortbl;;\cssrgb\c82002\c21453\c81341;\csgenericrgb\c93333\c100000\c80000;\csgray\c0;
\cssrgb\c75181\c20506\c11622;\cssrgb\c79001\c46041\c12364;\cssrgb\c17555\c71580\c76588;\cssrgb\c17793\c72259\c12919;\cssrgb\c31270\c17886\c87340;
}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\pardirnatural\partightenfactor0

\f0\fs22 \cf2 \cb3 \CocoaLigature0 <?php\cf4 \
 \cf2 include\cf4  \cf5 './dbconfig.php'\cf4 ;\
 \cf6 $\cf7 get_id\cf4  \cf6 =\cf4  \cf6 $\cf7 _GET\cf2 [\cf5 'id'\cf2 ]\cf4 ;\
 \cf6 $\cf7 get_pwd\cf4  \cf6 =\cf4  \cf6 $\cf7 _GET\cf2 [\cf5 'pwd'\cf2 ]\cf4 ;\
 \cf6 $\cf7 db\cf8 ->\cf4 set_charset\cf2 (\cf5 'uft-8'\cf2 )\cf4 ;\
 \cf6 $\cf7 sql\cf4  \cf6 =\cf4  \cf5 "select count(user_no)as cnt  from user_info where user_id='"\cf6 .$\cf7 get_id\cf6 .\cf5 "' and user_pwd='"\cf6 .$\cf7 get_pwd\cf6 .\cf5 "'"\cf4 ;\
 \cf6 $\cf7 result\cf4  \cf6 =\cf4  \cf6 $\cf7 db\cf8 ->\cf4 query\cf2 (\cf6 $\cf7 sql\cf2 )\cf4 ;\
 \cf6 $\cf7 row\cf4  \cf6 =\cf4  \cf6 $\cf7 result\cf8 ->\cf4 fetch_assoc\cf2 ()\cf4 ;\
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\pardirnatural\partightenfactor0
\cf9 \cb3 //echo $sql; \cf4 \cb3 \
\pard\tx560\tx1120\tx1680\tx2240\tx2800\tx3360\tx3920\tx4480\tx5040\tx5600\tx6160\tx6720\pardirnatural\partightenfactor0
\cf6 if\cf2 (\cf6 $\cf7 row\cf2 [\cf5 'cnt'\cf2 ]\cf4  \cf6 ==\cf4  \cf5 0\cf2 )\{\cf4 \
  \cf2 echo\cf4  \cf5 0\cf4 ;\
 \cf2 \}\cf6 else\cf4  \cf2 echo\cf4  \cf5 1\cf4 ;\
\cf2 ?>     }
