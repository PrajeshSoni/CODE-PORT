import java.io.*;
import javax.servlet.*;

public class ass22 extends GenericServlet
{
	public void service(ServletRequest req,ServletResponse res)
	{
		try
		{
			PrintWriter out=res.getWriter();
			String str=req.getParameter("t1");
			for(int i=0;i<str.;i++)
			out.println(""+str.substr(i));
			
			
		}catch(Exception e){}
	}
}