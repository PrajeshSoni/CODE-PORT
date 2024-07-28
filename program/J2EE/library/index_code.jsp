<%@ page import="java.sql.*" %>
<%@ page import="javax.sql.*" %>


<%
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:student1DSN");
			
			Statement stmt=conn.createStatement();
			
			ResultSet rs;
			String usr,pass;
			usr=request.getParameter("textfield3");
			pass=request.getParameter("textfield22");
			rs=stmt.executeQuery("select * from usermaster where username='"+usr+"' and password='"+pass+"'");
			
			
				if(rs.next())
				{
					if(usr.equals("admin"))
					{
						response.sendRedirect("home.jsp");
					}
					else
					{
						response.sendRedirect("index.jsp");
					}
				}
				else
				{
					response.sendRedirect("index.jsp");
				}
			
			rs.close();
			stmt.close();
			conn.close();
		}
		catch(Exception e)
		{
			System.out.println(""+e);
		}
%>
</table>