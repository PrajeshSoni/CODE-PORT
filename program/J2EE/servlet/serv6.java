import java.io.*;
import javax.servlet.*;
public class serv6 extends GenericServlet
{
	public void service(ServletRequest req, ServletResponse res)
	{
	try
	{
		PrintWriter out = res.getWriter();
		out.println("<form action = serv7 method=post>");
		out.println("Enter Name<input type=text name=t1>");
		out.println("<input type=submit name=show>");
		out.println("</form>");
	}catch(Exception e){}
	}
}