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
			out.println(""+str);
		}catch(Exception e){}
	}
}