use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->date('date'); // Add the date column
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('annonces');
    }
}
