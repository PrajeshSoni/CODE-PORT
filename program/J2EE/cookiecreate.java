import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
public class cookiecreate extends HttpServlet
{
	public void doGet(HttpServletRequest req,HttpServletResponse res)
	{
		try
		{
			Cookie c = new Cookie("course","BCA");
			res.addCookie(c);
			PrintWriter pw = res.getWriter();
			pw.println("cookie,created");
		}
		catch(Exception e){}
	}
}