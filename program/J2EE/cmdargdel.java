import java.io.*;
import java.sql.*;
import javax.sql.*;
class cmdargdel
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:stud1DSN");
			Statement stmt=conn.createStatement();
			int rno=Integer.parseInt(args[0]);
			
			int i=stmt.executeUpdate("delete from student1 where rollno="+rno+"");
					
			if(i==1)
			{
				System.out.println("Record deleted");
			}
			else
			{
				System.out.println("Record not deleted");
			}
			stmt.close();
			conn.close();
		}
		catch(Exception e)
		{
			System.out.println(" "+e);
		}
	}
}