import Ready from 'ready'
import cloudinary from 'cloudinary-core'
Ready(() => {
  const cl = cloudinary.Cloudinary.new( { cloud_name: "waxflower-bridal", upload_preset: "r4rkhnpc"});
  cl.responsive();
})
