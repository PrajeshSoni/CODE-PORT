import java.io.*;
import javax.servlet.*;

public class serv4 extends GenericServlet
{
	public void service(ServletRequest req,ServletResponse res)
	{
		try
		{
			PrintWriter out=res.getWriter();
			out.println("<form action=serv5 method=post>");
			out.println("Enter Value<input type=text name=t1>");
			out.println("<br><input type=submit value=show>");
			out.println("</form>");
			
		}catch(Exception e){}
	}
}