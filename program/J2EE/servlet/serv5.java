import java.io.*;
import javax.servlet.*;
public class serv5 extends GenericServlet
{
	public void service(ServletRequest req,ServletResponse res)
	{
		try
		{
			PrintWriter out=res.getWriter();
			String str=req.getParameter("t1");
			
			
			out.println(""+str.substring(0,1)+"<br>");
			out.println(""+str.substring(0,2)+"<br>");
			out.println(""+str.substring(0,3)+"<br>");
			out.println(""+str.substring(0,4)+"<br>");
			out.println(""+str.substring(0)+"<br>");
		}
		catch(Exception e){}
	}
}