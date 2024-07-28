<%
 String s= request.getParameter("t1");
 int l =s.length();
 out.println("<center><h1>");
 
 for(int i=1;i<=l;i++)
 {
	 String str = s.substring(0,i);
	 out.println(str +"<br>");
 }
%>