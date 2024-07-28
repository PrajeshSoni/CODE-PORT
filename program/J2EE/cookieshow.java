import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class cookieshow extends HttpServlet
{
	public void doGet(HttpServletRequest req,HttpServletResponse res)
	{
		try
		{
			PrintWriter out=res.getWriter();
			Cookie[] c1=req.getCookies();
			if(c1==null)
			{
				out.println("cookie not found");
			}
			else
			{
				Cookie c2;
				for(int i=0;i<c1.length;i++)
				{
					c2=c1[i];
					out.println("cookie Name="+c2.getName());
					out.println("cookie Value="+c2.getValue());
				}
			}
		}
		catch(Exception e)
		{
				System.out.println();
		}
	}
}