import java.io.*;
import javax.servlet.*;
public class serv3 extends GenericServlet
{
	public void service(ServletRequest req, ServletResponse res)
	{
	try
	{
		PrintWriter out=res.getWriter();
		out.println("<marquee> Hello Riddhi GoodMorning </marquee>");
	}catch(Exception e){}
	}
}